<?php 

namespace App\Repositories;

use App\Models\Blog\Blog;
use App\Models\Blog\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use App\Traits\Service;
use App\Traits\Utility;
use App\Models\Testimonial\Testimonial;
use App\Repositories\Interfaces\BlogRepositoryInterface;

class BlogRepository implements BlogRepositoryInterface{
    use Service, Utility;
    public function all_blog(Request $request){
        $get_search = $request->input('search');
        $get_category_id = $request->input('category_id');
        Session::put('get_search', $get_search);
        Session::put('get_category_id', $get_category_id);

        $data['blog_list'] = Blog::query()
        ->with('category')
        ->when($get_search, function ($query, $get_search) {
            return $query->where(function ($query) use ($get_search) {
                $query->where('title', 'like', '%' . $get_search . '%');
            });
        })
        ->when($get_category_id, function ($query, $get_category_id) {
            return $query->where('blog_category_id',$get_category_id);
        })
        ->where('status',0)
        ->orderBy('created_at','desc')
        ->paginate(3)
        ->appends([
            'search' => $get_search,
            'category_id' => $get_category_id,
        ]);
        $data['get_search'] = Session::get('get_search');
        $data['get_category_id'] = Session::get('get_category_id');
        return $data;
    }
    public function blog_categories(){
        $categories = BlogCategory::where('status',0)->orderBy('id','desc')->get();
        return $categories;
    }
    public function poular_blogs(){
        $popular_blogs = Blog::where('status',0)->inRandomOrder()->take(3)->get();
        return $popular_blogs;
    }
    public function unique_tags(){
        $getTags = Blog::pluck('alt_tag');
        $uniqueTags = $getTags
        ->flatMap(function ($tags) {
            return explode(',', $tags);
        })
        ->map(function ($tag) {
            return trim($tag);
        })
        ->unique()
        ->values();

        return $uniqueTags->toArray();
    }
    
    // public function add_post(Request $data){
    //     $image_directory = 'front/images/testimonial/';
    //     $image_path = '';
    //     if ($data->hasFile('image')) {
    //         $image_path = Utility::upload_image_to_public($data->file('image'),$image_directory,70,70);
    //     }
    //     $categoryData = [
    //         'name' => $data->input('name'),
    //         'designation' => $data->input('designation'),
    //         'description' => $data->input('description'),
    //         'image' => $image_path ?? null, // Use null if no image uploaded
    //     ];
    //     return Testimonial::create($categoryData);
    // }
}