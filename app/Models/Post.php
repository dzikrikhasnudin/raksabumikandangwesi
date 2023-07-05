<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:m:s',
        'updated_at' => 'datetime:Y-m-d H:m:s'
    ];

    protected $table = 'posts';

    protected $fillable = [
        'title', 'slug', 'description', 'thumbnail', 'content', 'category', 'status'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function scopeSearch($query, $keyword)
    {
        $query->when($keyword ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('content', 'like', '%' . $search . '%')
                ->orWhere('category', 'like', '%' . $search . '%');
        });
    }

    public function scopePublished(Builder $query): void
    {
        $query->where('status', '=', 'published');
    }

    public function scopeDraft(Builder $query): void
    {
        $query->where('status', '=', 'draft');
    }
}
