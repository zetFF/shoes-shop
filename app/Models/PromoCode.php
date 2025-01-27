<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class PromoCode extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'code',
        'discount_amount',
    ];
}
