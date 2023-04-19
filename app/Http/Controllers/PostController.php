<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        foreach ($posts as $post) {
            $post->body = substr($post->body, 0, 100);
        }
        return view('posts', compact('posts'));
    }
    public function postController()
    {
        return view('createpost');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5|max:255|string',
            'body' => 'required|min:5|max:255|string',
            'img_url' => 'required'

        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->img_url = $request->img_url;
        $post->save();
        return redirect('createpost')->with('status', 'POST CREATED SUCCESFULLY');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // $post = Post::find($id);
        $post = Post::with('comments')->find($id);
        return view('singlepost', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $post)
    {
        //
    }
}
