<?php

namespace App\Models\Testimonial;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $table = 'testimonials';

    protected $fillable = [
        'name', 'image','designation', 'description','status',
    ];
}
