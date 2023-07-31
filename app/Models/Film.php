<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Film extends Model
{
    use HasFactory;
    // protected $fillable = [];
    // protected $guarded = [];

    public function photo(): BelongsTo
    {
        return $this->belongsTo(File::class, "photo_id", "id");
    }
    public function genre(): BelongsTo
    {
        return $this->belongsTo(Genre::class, "genre_id", "id");
    }
    public function sessions(): HasMany
    {
        return $this->hasMany(Session::class, "film_id", "id");
    }
}