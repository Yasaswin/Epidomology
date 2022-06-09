<?php

namespace App\Services;
use Exception;
use App\Exceptions\ModelModifiedByAnotherUserException;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostImage;


class PostService {

    protected function storeImages($post_id,$images){

        foreach($images as $image)
        {
            $name=$image->getClientOriginalName();
            $destinationPath = 'storage/post/images';
            $image->move($destinationPath, $name);
            // Generate a random name for every file
            // $image = $request->file('image')->hashName();
            $post_image = PostImage::create([
                'post_id' => $post_id,
                'image' => $name,
            ]);
        }
    }

    public function store($request,$uid=null)
    {
        $data = $request->all();

        DB::beginTransaction();
        try 
        {          
            $post = new Post; 
            $post->user_id = $uid;          
            $post->title = $data['title'];
            $post->body = $data['body'];
            $post->published_at = \Carbon\Carbon::now();
            $post->save();

            if($post->id && isset($data['category_ids'])){
                foreach($data['category_ids'] as $category_id) {
                    $post->categories()->attach($category_id);
                }
            }

            if ($request->hasFile('image')) {

                $this->storeImages($post->id,$request->file('image'));
            }

        }
        catch (Exception $e)
        {
            DB::rollback();
            throw $e;
        }
        DB::commit();
        return $post;
    }

    public function shouldUpdate($post,$data)
    {    
        if (
            !$post->user_id ||          
            $post->title != $data['title'] ||
            $post->body != $data['body'] ||
            !$post->published_at
                ) {          
                return true;
        }
        else {
                return false;
            }
    }

    public function update(Post $post,$request,$uid=null)
    {      

        // $this->checkConcurrency($post->updated_at, $data['updated_at']);
        $data = $request->all();

        DB::beginTransaction();
        try 
        {
            if ($this->shouldUpdate($post,$data)){
            $post->user_id = $post->user_id ?? $uid;          
            $post->title = $data['title'];
            $post->body = $data['body'];
            $post->published_at = \Carbon\Carbon::now();
            $post->save();
            }
            
            $category_ids = $post->category_ids;

            if(isset($data['category_ids'])){

                if($category_ids != $data['category_ids']){
                    $post->categories()->detach(array_diff($category_ids,$data['category_ids']));
                    $post->categories()->attach(array_diff($data['category_ids'],  $category_ids));
                }
            }
            else {

                $post->categories()->detach();

            }

            if ($request->hasFile('image')) {
                $this->storeImages($post->id,$request->file('image'));
            }
        }
        catch (Exception $e)
        {
            DB::rollback();
            throw $e;
        }
        DB::commit();
        return $post;
    }
}