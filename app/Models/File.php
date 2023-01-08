<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Download;

class File extends Model
{
    use HasFactory;

    public function dataset()
    {
        return $this->blongsTo(Dataset::class);
    }
    public function download()
    {
        return $this->hasMany(Download::class);
    }
}
