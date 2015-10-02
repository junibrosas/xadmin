<?php
if ( ! function_exists('_postStickTags'))
{
     // Return set of post tags separated by comma
    function _postStickTags( \App\Post $post )
    {
        $postTags = \App\PostTag::postTags( $post );

        if(count($postTags) <= 0) return;

        return implode(',', $postTags);
    }
}