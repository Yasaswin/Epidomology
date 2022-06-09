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
use App\Models\PostPdf;
use App\Models\PostVideo;

class PostService {

    protected function storeImages($post_id,$images){

        foreach($images as $image)
        {
            $name=$image->getClientOriginalName();
            $destinationPath = 'storage/post/images';
            $image->move($destinationPath, $name);
            $post_image = PostImage::create([
                'post_id' => $post_id,
                'image' => $name,
            ]);
        }
    }

    protected function storePdfs($post_id,$pdfs){

        foreach($pdfs as $pdf)
        {
            $name=$pdf->getClientOriginalName();
            $destinationPath = 'storage/post/pdfs';
            $pdf->move($destinationPath, $name);
            $post_pdf = PostPdf::create([
                'post_id' => $post_id,
                'pdf' => $name,
            ]);
        }
    }

    protected function storeVedios($post_id,$videos){
        foreach($videos as $key=> $video)
        {
            if ($video){
                $post_video = PostVideo::create([
                    'post_id' => $post_id,
                    'video_link' => $video,
                    'related_id' => self::youtubeId($video),
                ]); 
            }
        }
    }

    protected static function youtubeId($url){
        $match = [];
        preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);
        $youtube_id = $match[1];
        return $youtube_id;
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

            if ($request->hasFile('pdf')) {
                $this->storePdfs($post->id,$request->file('pdf'));
            }

            if($videos=$data['video_link']??[]){
                $this->storeVedios($post->id,$videos); 
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

            if ($request->hasFile('pdf')) {
                $this->storePdfs($post->id,$request->file('pdf'));
            }

            if($videos=$data['video_link']??[]){
                $this->storeVedios($post->id,$videos); 
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