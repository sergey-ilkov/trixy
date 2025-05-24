<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Post extends Model
{
    use HasTranslations;

    public array $translatable = ['title', 'slug', 'description', 'body'];

    protected $fillable = [
        'title',
        'slug',
        'description',
        'views',
        'image',
        'image_min',
        'alt_image',
        'body',
        'published',
        'slider',
    ];

    protected $casts = [
        'title' => 'string',
        'slug' => 'string',
        'description' => 'string',
        'views' => 'integer',
        'image' => 'string',
        'image_min' => 'string',
        'alt_image' => 'string',
        'body' => 'string',
        'published' => 'boolean',
        'slider' => 'boolean',
    ];
}