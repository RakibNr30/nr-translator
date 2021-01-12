<?php

namespace Modules\Cms\Entities;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'abouts';

    protected $fillable = [
        'title',
        'subtitle',
        'details',
        'link',
    ];

    protected $hidden = [
    ];

    protected $casts = [
        'title' => 'string',
        'subtitle' => 'string',
        'details' => 'string',
        'link' => 'string',
    ];
}
