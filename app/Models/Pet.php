<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use CrudTrait;
    use HasFactory;
    
    public function setImageAttribute($value)
    {
        $attribute_name = "image";
        // you can check here if file is recieved or not using hasFile()
        $disk = "public";
        $destination_path = "/uploads";
        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
    }
}
