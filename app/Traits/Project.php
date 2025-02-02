<?php

namespace App\Traits;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
Use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\Login\LoginRequest;
use App\Models\Blog\BlogCategory;
use App\Models\Project\Project as ProjectProject;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Http\Request;
use App\Traits\Utility;
use App\Traits\Service;

trait Project{
    use Utility, Service;
    public static function create_project(Request $request){
        $p = new ProjectProject();
        $p->title = $request->title;
        $p->description = $request->description;
        $p->client = $request->client;
        $p->category_id = $request->category_id;
        $p->complete_date = $request->complete_date;
        $p->location = $request->location;
        $p->technologies = $request->technologies;
        $p->website = $request->website;
        $p->url = Service::slug_create($request->title);
        //update image
        if($request->hasFile('image')) {
            $image_directory = 'frontend/images/project/';
            $image_path = Utility::upload_image_to_public($request->image,$image_directory,671,1029);
            $p->image = $image_path;
        }
        $p->save();
        return true;
    }
    public static function all_project(){
        $data = ProjectProject::with('category')->orderBy('created_at','desc')->paginate(10);
        return $data;
    }
    public static function get_categories(){
        $data = BlogCategory::where('status',0)->get();
        return $data;
    }
    public static function get_project($id){
        $data = ProjectProject::with('category')->where('id',$id)->first();
        return $data;
    }

}
