<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ProductRent extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    public $table = 'products_rent';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'vendor_id',
        'description',
        'content',
        'parameters',
        'price_rent',
        'favorite_flg',
        'status'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'parameters' => 'array',
        'favorite_flg' => 'boolean',
        'status' => 'boolean',
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

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    public function images()
    {
        return $this->belongsToMany(Media::class, 'media_product_rent');
    }

    public function thumbnail()
    {
        return $this->hasOne(Media::class, 'id', 'featured_image');
    }

    public function getThumbnailUrlAttribute()
    {
        $thumbnail = env('APP_URL') .'/default.jpg';
        if ($this->thumbnail !== null) :
            $thumbnail = $this->thumbnail->getUrl();
        endif;
        return $thumbnail;
    }

    public function getThumbnailUrl($thumb = 'thumb-540')
    {
        $thumbnail = env('APP_URL') .'/default.jpg';
        if ($this->thumbnail !== null) :
            $thumbnail = $this->thumbnail->getUrl($thumb);
        endif;
        return $thumbnail;
    }

    public function setParametersAttribute($value)
    {
        $parameters = [];
        foreach ($value as $array_item) {
            if (!is_null($array_item['key'])) {
                $parameters[] = $array_item;
            }
        }
        $this->attributes['parameters'] = json_encode($parameters);
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::of($value)->slug('-');
    }

    public function setPriceRentAttribute($value)
    {
        $this->attributes['price_rent'] = str_replace(',', '', $value);
    }
}
