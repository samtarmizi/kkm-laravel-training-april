<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIBlogController extends Controller
{
    public function index()
    {
        $blogs = \App\Models\Blog::all();

        return response()->json([
            'message' => 'Successfully retrieved blogs',
            'data' => $blogs,
        ]);
    }

    public function show(\App\Models\Blog $blog)
    {
        return response()->json([
            'message' => 'Successfully retrieved blog',
            'data' => $blog,
        ]);
    }

    public function delete(\App\Models\Blog $blog)
    {
        $blog->delete();
        return response()->json([
            'message' => 'Successfully deleted blog',
            'data' => $blog,
        ]);
    }
}
