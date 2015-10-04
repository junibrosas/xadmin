<?php
if ( ! function_exists('_postStickTags'))
{
     // Return set of post tags separated by comma
    function _postStickTags( \Xadmin\Features\CMS\Models\Post $post )
    {
        $postTags = \Xadmin\Features\CMS\Models\PostTag::postTags( $post );

        if(count($postTags) <= 0) return;

        return implode(',', $postTags);
    }
}