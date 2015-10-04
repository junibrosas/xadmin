<?php

namespace Xadmin\Features\CMS\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Post extends Model
{
    protected $table = "posts";
    protected $fillable = ['title', 'content', 'is_visible', 'published_at', 'slug', 'post_type', 'meta_keywords', 'meta_description'];

    public static function savePost( Request $request, Post $post = null ){
        if(!$post){
            $post = new Post();
        }
        $isVisible = $request->get('is_visible');

        $post->title = $request->get('title');
        $post->content = $request->get('content');
        $post->slug = str_slug( $request->get('slug') );
        $post->meta_keywords = $request->get('title');
        $post->meta_description = $request->get('content');
        $post->is_visible = isset($isVisible);
        if($request->get('published_at')) 
            $post->published_at =  $request->get('published_at') . ' ' . date("H:i:s", time());
        
        $post->save();

        return $post;
    }
}

