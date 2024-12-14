<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data['page_title'] = "Redlep | Home";
        return view('home.index',$data);
    }
}
