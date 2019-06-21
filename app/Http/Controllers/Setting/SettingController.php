<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    //
    public function setting(){
        return view('setting.setting');
    }
}
