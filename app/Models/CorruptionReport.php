<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CorruptionReport extends Model
{
    protected $fillable = ['user_id','title', 'description','status', 'severity', 'image_path', 'video_path'];

    protected $attributes = [
        'status' => 0
    ];
}
