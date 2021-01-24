<?php

namespace Modules\Cms\Entities;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Translate extends Model
{
    use Sluggable;

    protected $table = 'translates';

    protected $fillable = [
        'title',
        'slug',
        'from_lang',
        'from_lang_code',
        'to_lang',
        'to_lang_code',
        'details'
    ];

    protected $hidden = [

    ];

    protected $casts = [
        'title' => 'string',
        'slug' => 'string',
        'from_lang' => 'string',
        'from_lang_code' => 'string',
        'to_lang' => 'string',
        'to_lang_code' => 'string',
        'details' => 'string'
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
