<?php

namespace App\Http\Controllers\Test;

use App\Model\TestModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function test(){
        $data = TestModel::get();
        var_dump($data);
    }
}
