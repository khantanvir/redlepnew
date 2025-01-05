<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog\Blog;
use App\Models\Blog\BlogCategory;
use App\Repositories\Interfaces\BlogRepositoryInterface;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    private $blogRepository;

    public function __construct(BlogRepositoryInterface $blogRepository){
        $this->blogRepository = $blogRepository;
    }
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
    public function services(){
        $data['page_title'] = "Redlep | Services";
        return view('home.services',$data);
    }
    public function why_us(){
        $data['page_title'] = "Redlep | Why Us";
        return view('home.why_us',$data);
    }
    public function privacy_policy(){
        $data['page_title'] = "Redlep | Privacy & Policy";
        return view('home.privacy_policy',$data);
    }
    public function terms_conditions(){
        $data['page_title'] = "Redlep | Terms & Conditions";
        return view('home.terms_conditions',$data);
    }
    public function blog(Request $request){
        $data['page_title'] = "Redlep | Blog";
        $data['blog_list'] = $this->blogRepository->all_blog($request);
        //dd($data['blog_list']);
        $data['categories'] = $this->blogRepository->blog_categories();
        $data['popular_blogs'] = $this->blogRepository->poular_blogs();
        $data['unique_tags'] = $this->blogRepository->unique_tags();
        return view('home.blog.blogs',$data);
    }
    public function blog_details($slug=NULL){
        $data['page_title'] = "Redlep | Blog Details";
        $data['blog'] = Blog::where('slug',$slug)->first();
        $data['categories'] = $this->blogRepository->blog_categories();
        $data['popular_blogs'] = $this->blogRepository->poular_blogs();
        $data['unique_tags'] = $this->blogRepository->unique_tags();
        return view('home.blog.blog_details',$data);
    }
    public function contact(){
        $data['page_title'] = "Redlep | Contact";
        return view('home.contact',$data);
    }
    public function contact_store(Request $request){
        
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'subject'=>'required',
            'message'=>'required',
        ]);
        $this->blogRepository->contact_data_post($request);
        Session::flash('success','Thnaks for connecting with us. We will get back to you soon.');
        return redirect()->back();
    }
}
