<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Article extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'article_type_id',
        'name',
        'description',
        'content',
        'favorite_flg',
        'status'
    ];

    /**
     * Scope a query to only include favorite products.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeFavorite($query)
    {
        return $query->where('favorite_flg',true);
    }
    /**
     * Scope a query to only include active products.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query)
    {
        return $query->where('status', true);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection(env('COLLECTION_NAME_IMAGES'))
            ->registerMediaConversions(function (Media $media) {
                $this->addMediaConversion('thumb-70')
                    ->width(120)
                    ->height(80);
                $this->addMediaConversion('thumb-540')
                    ->width(540)
                    ->height(360);
            });
    }

    public function thumbnail()
    {
        return $this->hasOne(Media::class, 'id', 'featured_image');
    }

    public function getThumbnailUrlAttribute()
    {
        $thumbnail = 'https://cuoifly.tuoitre.vn/155/0/ttc/r/2020/02/03/logo-ttc-1580721954.png';
        if ($this->thumbnail !== null) :
            $thumbnail = $this->thumbnail->getUrl();
        endif;
        return $thumbnail;
    }

    public function getThumbnailUrl($thumb = 'thumb-540')
    {
        $thumbnail = 'https://cuoifly.tuoitre.vn/155/0/ttc/r/2020/02/03/logo-ttc-1580721954.png';
        if ($this->thumbnail !== null) :
            $thumbnail = $this->thumbnail->getUrl($thumb);
        endif;
        return $thumbnail;
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::of($value)->slug('-');
    }


}
