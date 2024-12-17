<?php 

namespace App\Repositories;
use App\Repositories\Interfaces\TestimonialRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use App\Traits\Service;
use App\Traits\Utility;
use App\Models\Testimonial\Testimonial;

class TestimonialRepository implements TestimonialRepositoryInterface{
    use Service, Utility;
    public function add(){

    }
    public function all(){

    }
    public function add_post(Request $data){
        $image_directory = 'front/images/testimonial/';
        $image_path = '';
        if ($data->hasFile('image')) {
            $image_path = Utility::upload_image_to_public($data->file('image'),$image_directory,70,70);
        }
        $categoryData = [
            'name' => $data->input('name'),
            'designation' => $data->input('designation'),
            'description' => $data->input('description'),
            'image' => $image_path ?? null, // Use null if no image uploaded
        ];
        return Testimonial::create($categoryData);
    }
}