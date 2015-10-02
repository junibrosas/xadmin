<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\PostRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use App\PostTag;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('admin.pages.pages');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $post = new Post();
        return view('admin.pages.page', compact('post'));
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
        
        $post->post_type = 'page';
        $post->save();

        // Save new tags
        PostTag::saveTags( $request->get('tags'), $post );

        //instaFlash('Successfully Published!', 'Yes! your post is published!');

        return redirect()->route('admin.pages.edit', $post->id)->withInput();
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
        $post = Post::find($id);
        if(!isset($post->id))
            $post = new Post();    
        
        $data['post'] = $post;

        return view('admin.pages.page', compact('post'));
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
        // Find post
        $post = Post::find($id);

        // Save new post
        $post = Post::savePost( $request, $post );

        // Save new tags
        PostTag::saveTags( $request->get('tags'), $post );

        return redirect()->back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        if ($post && $post->delete) {
            return redirect()->back()->with('message', 'Deleted Successfully.' );
        }

        return redirect()->back()->with('message', 'Unable to delete.' );
    }
}
