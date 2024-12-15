<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $data['page_title'] = "Redlep | Home";
        return view('home.index',$data);
    }
    public function about(){
        $data['page_title'] = "Redlep | About Us";
        return view('home.about',$data);
    }
}
