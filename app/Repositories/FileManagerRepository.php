<?php

namespace App\Repositories;

use App\Models\Image;
use App\Models\Link;
use Illuminate\Support\Facades\Storage;

class FileManagerRepository
{
    private $diskImages;

    private $image;

    private $diskFiles;

    private $link;

    public function __construct(Image $image, Link $link)
    {
        $this->diskImages = Storage::disk('images');
        $this->diskFiles = Storage::disk('files');
        $this->image      = $image;
        $this->link = $link;
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

    public function saveFile($file)
    {
        $file_name = $this->diskFiles->put('/', $file);

        return $file_name;
    }

    public function deleteFile(Link $link)
    {
        $this->diskFiles->delete($link->link);
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