<?php

namespace App\Http\Helpers;

use Intervention\Image\Facades\Image;

class ImageHelper
{
    public static function uploadImages($file): string
    {
        $path = 'upload/images';
        $image = $file->store($path, 'public');
        Image::make(storage_path('app/public/' . $image))
            ->resize(500, 500)
            ->save(storage_path('app/public/' . $image));

        return $image;
    }
}
