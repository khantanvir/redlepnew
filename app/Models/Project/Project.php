<?php

namespace App\Models\Project;

use App\Models\Blog\BlogCategory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function category(){
        return $this->belongsTo(BlogCategory::class,'category_id','id');
    }
}
