<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryVideo extends Model
{
    use HasFactory;

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:m:s',
        'updated_at' => 'datetime:Y-m-d H:m:s'
    ];

    protected $table = 'gallery_videos';

    protected $fillable = [
        'title', 'slug', 'video'
    ];


    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function scopeSearch($query, $keyword)
    {
        $query->when($keyword ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%');
        });
    }
}
