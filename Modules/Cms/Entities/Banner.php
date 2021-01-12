<?php

namespace Modules\Cms\Entities;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banners';

    protected $fillable = [
        'title',
        'tag_line',
        'link_1',
        'link_name_1',
        'link_2',
        'link_name_2',
    ];

    protected $hidden = [
    ];

    protected $casts = [
        'title' => 'string',
        'tag_line' => 'string',
        'link_1' => 'string',
        'link_name_1' => 'string',
        'link_2' => 'string',
        'link_name_2' => 'string',
    ];
}
