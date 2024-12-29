<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog\Blog;
use App\Models\Blog\BlogCategory;

class IndexController extends Controller
{
    public function index(){
        $data['page_title'] = "Redlep | Home";
        $data['blog_list'] = Blog::with('category')->orderBy('created_at','desc')->take(3)->get();
        return view('home.index',$data);
    }
    public function about(){
        $data['page_title'] = "Redlep | About Us";
        return view('home.about',$data);
    }
    public function faq(){
        $data['page_title'] = "Redlep | FAQ";
        return view('home.faq',$data);
    }
    public function blog_details($slug=NULL){
        $data['page_title'] = "Redlep | Blog Details";
        $data['blog'] = Blog::where('slug',$slug)->first();
        $data['categories'] = BlogCategory::orderBy('id','desc')->get();
        return view('home.blog.blog_details',$data);
    }
}
