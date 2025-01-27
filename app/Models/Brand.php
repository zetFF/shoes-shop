<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Brand extends Model
{
   use HasFactory, SoftDeletes;

   protected $fillable = [
    'name',
    'slug',
    'logo',
   ];

   public function setNameAttribute($value)
  {
    $this->attributes['name'] = $value;
    $this->attributes['slug'] = Str::slug($value);
  }

  public function shoes(): HasMany
  {
    return $this->hasMany(Shoe::class);
  }
}
