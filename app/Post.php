<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Post extends Model
{
    protected $table = "posts";
    protected $fillable = ['title', 'content', 'is_visible'];

    public static function savePost( Request $request ){
        $isVisible = $request->get('visibility');
        
    	$post = new Post();
        $post->title = $request->get('post_title');
        $post->content = $request->get('post_content');
        $post->is_visible = isset($isVisible);
        if($request->get('date_created'))
            $post->created_at = $request->get('date_created') . ' ' . date("H:i:s", time());
        $post->save();

        return $post;
    }
}

