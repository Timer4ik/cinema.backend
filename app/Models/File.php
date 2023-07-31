<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class File extends Model
{
    use HasFactory;
    protected $fillable = ['name','size','link'];
    public function films(): HasMany
    {
        return $this->hasMany(Film::class, "photo_id", "id");
    }
}