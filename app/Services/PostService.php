<?php

namespace App\Services;
use Exception;
use App\Exceptions\ModelModifiedByAnotherUserException;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Post;

class PostService {


    public function store($data)
    {
        DB::beginTransaction();
        try 
        {          
            $post = new Post; 
            $post->user_id = auth()->id();          
            $post->title = $data['title'];
            $post->body = $data['body'];
            $post->published_at = \Carbon\Carbon::now();
            $post->save();

            if($post->id && isset($data['category_ids'])){
                foreach($data['category_ids'] as $category_id) {
                    $post->categories()->attach($category_id);
                }
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

    public function shouldUpdate(Post $post,$data)
    {    
        if (
            $post->user_id = Auth::auth()->id() ||          
            $post->title != $data['title'] ||
            $post->body != $data['body'] ||
            $post->published_at = \Carbon\Carbon::now()
                ) {          
                return true;
        }
        else {
                return false;
            }
    }

    public function update(Post $post,$data)
    {
        $this->checkConcurrency($post->updated_at, $data['updated_at']);
        DB::beginTransaction();
        try 
        {
            $post->user_id = Auth::auth()->id();          
            $post->title = $data['title'];
            $post->body = $data['body'];
            $post->published_at = \Carbon\Carbon::now();
            $post->save();     
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