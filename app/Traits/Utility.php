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
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

trait Utility{
    public static function upload_image($image, $directory = 'uploads/', $allowedExtensions = ['jpg', 'png', 'jpeg']){
        $ext = $image->getClientOriginalExtension();
        if (!$ext || !in_array($ext, $allowedExtensions)) {
            Session::flash('error', 'Invalid Document! Please upload JPG, PNG, or JPEG.');
            return null;
        }
        $imageFileName = uniqid('Category-') . '-' . preg_replace('/\s+/', '-', $image->getClientOriginalName());
        if (!Storage::disk('local')->exists($directory)) {
            Storage::disk('local')->makeDirectory($directory);
            chmod(storage_path('app/' . $directory), 0775);
        }
        $image->storeAs($directory, $imageFileName, 'local');
        return $directory . $imageFileName;
    }
    public static function upload_image_to_public($image, $directory, $allowedExtensions = ['jpg', 'png', 'jpeg']){
        $ext = $image->getClientOriginalExtension();
        if (!$ext || !in_array($ext, $allowedExtensions)) {
            Session::flash('error', 'Invalid Document! Please upload JPG, PNG, or JPEG.');
            return null;
        }
        $imageFileName = uniqid('Testimonial-') . '-' . preg_replace('/\s+/', '-', $image->getClientOriginalName());
        $targetPath = public_path($directory);
        if (!file_exists($targetPath)) {
            mkdir($targetPath, 0775, true);
        }
        $image->move($targetPath, $imageFileName);
        return $directory . $imageFileName;
    }
}