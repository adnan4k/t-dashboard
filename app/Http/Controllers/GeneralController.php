<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Service;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    //
    public function articles()
    {
        $articles = Service::latest()->get();
        return response()->json($articles);
    }
    public function blogs()
    {
        $blogs = Blog::latest()->get();
        return response()->json($blogs);
    }
    
}
