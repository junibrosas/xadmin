<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class PostTag extends Model
{
    protected $table = "post_tags";
    protected $fillable = ["post_id", "tag_id"];

    public static function saveTags($tags, Post $post){
    	$tagGroup = explode(',', $tags);
	    if($tags){
	        foreach ($tagGroup as $key => $tag) {
	            $tag = \App\Tag::create([
	                'name' => $tag,
	                'slug' => str_slug($tag)
	            ]);

	            \App\PostTag::create([
	                'post_id' => $post->id,
	                'tag_id' => $tag->id
	            ]);
	        }
	    }   
    }
}
