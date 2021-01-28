<?php

namespace Modules\Cms\Entities;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Article extends Model implements HasMedia
{
    use Sluggable, HasMediaTrait;

    private $format = 'd M Y';

    public function getUpdatedAtAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format($this->format);
    }

    protected $table = 'articles';

    protected $fillable = [
        'title',
        'slug',
        'details',
        'external_link',
        'author_id',
    ];

    protected $hidden = [
    ];

    protected $casts = [
        'title' => 'string',
        'slug' => 'string',
        'details' => 'string',
        'external_link' => 'string',
        'author_id' => 'integer',
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    // get avatar attribute
    public function getImageAttribute()
    {
        $media = $this->getMedia(config('core.media_collection.article.image'));
        if (isset($media[0])) {
            return json_decode(json_encode([
                'file_name' => $media[0]->file_name,
                'file_url' => $media[0]->getUrl()
            ]));
        }
        return null;
    }

    public function uploadFiles()
    {
        // check for avatar
        if (request()->hasFile('image')) {
            // remove old file from collection
            if ($this->hasMedia(config('core.media_collection.article.image'))) {
                $this->clearMediaCollection(config('core.media_collection.article.image'));
            }
            // upload new file to collection
            $this->addMediaFromRequest('image')
                ->toMediaCollection(config('core.media_collection.article.image'));
        }
    }

}
