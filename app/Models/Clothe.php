<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Clothe extends Model implements HasMedia
{
    use HasFactory,SoftDeletes,InteractsWithMedia;

    protected $fillable = [
        'collection_id',
        'clothe_name',
        'price',
        'description',
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this   ->addMediaConversion('thumb')
            ->width(735)
            ->height(1000);

    }

    public function sizes()
    {
        return $this->hasMany(Size::class);
    }
}
