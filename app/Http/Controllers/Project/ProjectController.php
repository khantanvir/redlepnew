<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Traits\Utility;
use App\Traits\Service;
use App\Traits\Project;
use Illuminate\Support\Facades\Session;

class ProjectController extends Controller{
    use Utility, Service, Project;

    public function create(){
        $data['project'] = true;
        $data['add_project'] = true;
        $data['page_title'] = "Project | Create Project";
        $data['categories'] = Project::get_categories();
        return view('project.create',$data);
    }
    public function store(Request $request){
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'category_id'=>'required',
            'client'=>'required',
            'complete_date'=>'required',
            'location'=>'required',
            'technologies'=>'required',
        ]);
        Project::create_project($request);
        Session::flash('success', 'Project added successfully.');
        return redirect('all-project');
    }
    public function all_project(){
        $data['project'] = true;
        $data['all_project'] = true;
        $data['page_title'] = "Project | All Project";
        $data['projects'] = Project::all_project();
        return view('project.all',$data);
    }
    public function get_project($id){
        $data['project'] = true;
        $data['project_data'] = Project::get_project($id);
        $data['page_title'] = "Project | Edit Project";
        return view('project.edit',$data);
    }
}
