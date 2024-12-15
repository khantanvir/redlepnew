<?php 

namespace App\Repositories\Interfaces;

use Illuminate\Http\Request;

Interface TestimonialRepositoryInterface{
    public function add();
    public function all();
    public function add_post(Request $data);
    
}