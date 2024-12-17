<?php

namespace App\Http\Controllers\Testimonial;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Repositories\Interfaces\TestimonialRepositoryInterface;
use App\Models\Testimonial\Testimonial;

class TestimonialController extends Controller{
    private $testimonialRepository;

    public function __construct(TestimonialRepositoryInterface $testimonialRepository){
        $this->testimonialRepository = $testimonialRepository;
    }
    public function add(){
        $data['testimonial'] = true;
        $data['add_testimonial'] = true;
        $data['page_title'] = 'Add Testimonial';
        return view('admin.testimonial.add',$data);
    }
    public function add_post(Request $request){
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $this->testimonialRepository->add_post($request);
        Session::flash('success', 'Testimonial added successfully.');
        return redirect()->back();
    }
    //
}
