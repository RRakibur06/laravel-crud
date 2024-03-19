<?php

namespace App\Http\Controllers;

use index;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
          ]);
          Post::create($request->all());
          return redirect('/show')
            ->with('success','Post created successfully.');
    }

    public function show()
    {
        $post = post::all();
        return view('posts.show',compact('post'));
    }

    public function edit(Post $post) {
        return view('posts.edit', ['post' => $post]);
    } 

    public function update(Post $post, Request $request) {
        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);

        $post->update($incomingFields);
        return redirect('/show')->with('success','Post updated successfully.');;
    }

    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/show')->with('success','Post deleted successfully.');
    }
}
