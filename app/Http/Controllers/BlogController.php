<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = \App\Models\Blog::all();

        return view('blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        $blog = new \App\Models\Blog();
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->author = $request->author;
        $blog->save();

        return redirect()->route('blogs.index');
    }

    public function show(\App\Models\Blog $blog)
    {
        return view('blogs.show', compact('blog'));
    }

    public function edit(\App\Models\Blog $blog)
    {
        return view('blogs.edit', compact('blog'));
    }

    public function update(\App\Models\Blog $blog, Request $request)
    {
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->author = $request->author;
        $blog->save();

        return redirect()->route('blogs.index');
    }

    public function delete(\App\Models\Blog $blog)
    {
        $blog->delete();

        return redirect()->route('blogs.index');
    }
}
