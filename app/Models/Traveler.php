<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Traveler extends Model
{

    use HasTranslations;

    use HasFactory;

    public $translatable = ['title', 'country'];


    protected $fillable = [
        'title',
        'country',
        'price',
        'image',
    ];
}
