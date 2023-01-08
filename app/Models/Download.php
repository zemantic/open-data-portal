<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\File;

class Download extends Model
{
    use HasFactory;

    public function file()
    {
        return this->hasMany(File::class);
    }
}
