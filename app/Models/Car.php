<?php

namespace App\Models;

use App\Models\CarType;
use App\Models\CarImage;
use App\Models\CarFeatures;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
   use HasFactory, SoftDeletes;

   protected $fillable = [
      'maker_id',
      'model_id',
      'year',
      'price',
      'vin',
      'mileage',
      'car_type_id',
      'fuel_type_id',
      'user_id',
      'city_id',
      'address',
      'phone',
      'description',
      'published_at',
   ];
   
   public function features(): HasOne
   {
      return $this->hasOne(CarFeatures::class, 'car_id');
   }

   public function primaryImage(): HasOne
   {
      return $this->hasOne(CarImage::class)
         ->oldestOfMany('position');
   }

   public function images(): HasMany
   {
      return $this->hasMany(CarImage::class);
   }

   public function carType(): BelongsTo
   {
      return $this->belongsTo(CarType::class);
   }
}
