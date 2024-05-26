<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Support\Facades\Auth;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('viewAny', Post::class);
        $posts = Post::where('user_id', Auth::user()->id)->get();
        return view('resources.post.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('resources.post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        
        Post::create([
            'user_id' => Auth::user()->id,
            'subject' => $request->subject,
            'post' => $request->post,
            'status' => (is_null($request->status) ? 0 : 1)
        ]);
        return redirect()->route('post.index')->with('message', 'Post Successfully Saved!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $this->authorize('view', Auth::user(), Post::class);
        return view('resources.post.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('resources.post.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $post->update([
            'user_id' => Auth::user()->id,
            'subject' => $request->subject,
            'post' => $request->post,
            'status' => (is_null($request->status) ? 0 : 1)
        ]);
        return redirect()->route('post.index')->with('message', 'Post Successfully Saved!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index')->with('message', 'Post Successfully Deleted!');
    }

    public function postIndex() {
        $posts = Post::where('status', 1)->get();
        return view('pages.index', ['posts' => $posts]);
    }
    
    public function postStatus()
    {
        $userId = Auth::user()->id;
        $totalPosts = Post::where('user_id', $userId)->count();
        $unpublishedPosts = Post::where('user_id', $userId)->where('status', 0)->count();
        $publishedPosts = Post::where('user_id', $userId)->where('status', 1)->count();

        return view('dashboard', compact('totalPosts', 'unpublishedPosts', 'publishedPosts'));
    }
}
