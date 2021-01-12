<?php

namespace Modules\Cms\Entities;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $table = 'histories';

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
