<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function blog(){
        return view('blog.blog');
    }

    public function blogSingle(){
        return view('blog.blogSingle');
    }
}
