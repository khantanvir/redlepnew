<?php 

namespace App\Repositories\Interfaces;

use Illuminate\Http\Request;

Interface BlogRepositoryInterface{
    public function all_blog(Request $data);
    public function blog_categories();
    public function poular_blogs();
    public function unique_tags();
    public function contact_data_post(Request $request);
}