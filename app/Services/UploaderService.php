<?php

namespace App\Services;
use Intervention\Image\ImageManagerStatic as Image;

class UploaderService {

    public function upload ($file, $dir = null)
    {
        $this->file = $file;
        $this->dir = $dir;

        $fileName = str_random(12);
        $fileExtension = $this->file->getClientOriginalExtension();
        $this->saveFileName = $fileName. "." .$fileExtension;

        $uploadsHome = "/images/";
        $this->dir = $this->dir ? $uploadsHome.$this->dir."/" : uploadsHome;  

        $this->destination = public_path($this->dir);
            
        $this->file->move($this->destination, $this->saveFileName);
        return $this;
    }

    public function watermark()
    {
        $image = Image::make(public_path($this->dir. '/' .$this->saveFileName))
            ->insert(public_path('images/watermark.png'), 'bottom-right', 10, 10)
            ->save();
        return $this;
    }
}
