<?php

namespace App\Repositories;

use App\Models\Image;
use Illuminate\Support\Facades\Storage;

class FileManagerRepository
{
    private $diskImages;

    private $image;

    public function __construct(Image $image)
    {
        $this->diskImages = Storage::disk('images');
        $this->image      = $image;
    }


    public function saveImage($image)
    {
        return $this->putImage($image);
    }

    public function updateImage($image_id = null, $new_image)
    {
        if (! is_null($image_id)) {

            // get Image
            $image = $this->image->findOrFail($image_id);

            // Remove Image
            $this->deleteImage($image);
        }

        // Save new image
        return $this->putImage($new_image);
    }

    public function removeImage($image_id)
    {
        $image = $this->image->findOrFail($image_id);

        $this->deleteImage($image);
    }

    private function putImage($image)
    {
        $name = $image->hashName();

        // Put File
        $image_name = $this->diskImages->put('/', $image);

        //save file database
        $image_save = $this->image->create([
            'name' => $name,
            'path' => $image_name
        ]);

        return $image_save;
    }

    private function deleteImage(Image $image)
    {
        //Remove Image Store
        $this->diskImages->delete($image->path);

        // Remove register from Image

        try {

            return $image->delete();

        } catch (\Exception $e) {

            return $e->getMessage();
        }
    }

}