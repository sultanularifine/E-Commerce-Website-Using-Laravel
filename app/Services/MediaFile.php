<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MediaFile 
{
    public function upload($path, $file) {
        // Check if the path has '/' at the end
        if (!Str::endsWith($path, '/')) $path .= '/';
        $file_name = time() . '_' . Str::random(4) . '.' . $file->getClientOriginalExtension();
        $path = $file->storeAs(('public/'.$path), $file_name);

        return $file_name;
    }

    public function uploadBase64($path, $file) {
        $file_name = time() . '_' . Str::random(4) . '.png';
        // Check if the path has '/' at the end
        if (!Str::endsWith($path, '/')) $path .= '/';
        Storage::disk('public')->put($path . $file_name, base64_decode(explode(',', $file)[1]));

        return $file_name;
    }
}