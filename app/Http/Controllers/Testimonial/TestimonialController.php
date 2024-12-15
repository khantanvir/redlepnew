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
        $data['page_title'] = 'Add Testimonial';
        return view('admin.testimonial.add',$data);
    }
    //
}
