<?php

namespace App\Http\Controllers\Wishlist;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WishlistController extends Controller
{
    //
    public function wishlist(){
        return view('wishlist.wishlist');
    }
}
