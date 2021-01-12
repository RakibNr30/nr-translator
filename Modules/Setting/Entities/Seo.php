<?php

namespace Modules\Setting\Entities;

use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    protected $table = 'seos';

    protected $fillable = [
        'meta_title',
        'meta_description',
        'meta_type',
        'meta_tags',
    ];

    protected $hidden = [
    ];

    protected $casts = [
        'meta_title' => 'string',
        'meta_description' => 'string',
        'meta_type' => 'string',
        'meta_tags' => 'string',
    ];
}
