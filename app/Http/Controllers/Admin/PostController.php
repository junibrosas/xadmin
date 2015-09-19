<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\PostRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use App\PostTag;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {


        return view('admin.pages.posts');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create( Request $request )
    {
        $post = Post::find(\Input::get('post'));
        if(!isset($post->id))
            $post = new Post();    
        
        $data['post'] = $post;
        return view('admin.pages.post-create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        // Save new post
        $post = Post::savePost( $request );

        // Save new tags
        PostTag::saveTags( $request->get('tags'), $post );

        instaFlash('Successfully Published!', 'Yes! your post is published!');

        return redirect()->route('admin.posts.create', ['post' => $post->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {

    }

}
