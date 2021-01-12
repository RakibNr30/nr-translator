<?php

namespace Modules\Cms\Entities;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banners';

    protected $fillable = [
        'title',
        'tag_line',
    ];

    protected $hidden = [
    ];

    protected $casts = [
        'title' => 'string',
        'tag_line' => 'string',
    ];
}
