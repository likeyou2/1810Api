<?php

namespace App\Http\Controllers\AboutUs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutUsController extends Controller
{
    //
    public function aboutUs(){
        return view('aboutUs.aboutUs');
    }
}
