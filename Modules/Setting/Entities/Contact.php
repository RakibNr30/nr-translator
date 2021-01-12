<?php

namespace Modules\Setting\Entities;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';

    protected $fillable = [
        'message_to_user',
        'phone_1',
        'phone_2',
        'email_1',
        'email_2',
        'address',
        'longitude',
        'latitude',
        'website_link',
        'facebook_link',
        'twitter_link',
        'instagram_link',
        'youtube_link',
    ];

    protected $hidden = [
    ];

    protected $casts = [
        'message_to_user' => 'string',
        'phone_1' => 'string',
        'phone_2' => 'string',
        'email_1' => 'string',
        'email_2' => 'string',
        'address' => 'string',
        'website_link' => 'string',
        'longitude' => 'double',
        'latitude' => 'double',
        'facebook_link' => 'string',
        'twitter_link' => 'string',
        'instagram_link' => 'string',
        'youtube_link' => 'string',
    ];
}
