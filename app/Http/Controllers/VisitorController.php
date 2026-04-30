<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function index()
    {
        // query from table 'visitors' using model Visitor
        $visitors = \App\Models\Visitor::all();

        // return to views - resources/views/visitors/index.blade.php
        return view('visitors.index', compact('visitors'));
    }

    public function create()
    {
        // return to views - resources/views/visitors/create.blade.php
        return view('visitors.create');
    }
}
