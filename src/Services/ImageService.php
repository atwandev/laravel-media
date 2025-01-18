<?php

namespace AtwanDev\LaravelMedia\Services;

use AtwanDev\LaravelMedia\Enums\MediaTypeEnum;
use AtwanDev\LaravelMedia\Models\Media;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ImageService
{
    public function upload(UploadedFile $file, bool $isPrivate = false)
    {
        $filename = $file->getClientOriginalName();

        // Upload file
        $path = 'images';
        Storage::putFileAs($path, $file, $filename.'-'.now());

        // Create a row for migration
        Media::query()->create([
            'user_id' => auth()->id(),
            'filename' => $filename,
            'path' => $path,
            'is_private' => $isPrivate,
            'files' => [],
            'type' => MediaTypeEnum::TYPE_IMAGE->value,
        ]);


        // Return filename
        return $filename;
    }
}
