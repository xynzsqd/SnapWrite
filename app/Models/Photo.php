<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'user_id',
        'image_path',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
