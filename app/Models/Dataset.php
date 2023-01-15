<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dataset extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function keywords()
    {
        return $this->belongsToMany(Keyword::class);
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    public function files()
    {
        return $this->belongsToMany(File::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
}
