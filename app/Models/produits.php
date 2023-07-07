<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class produits extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'designation',
        'lien_image',
        'prix',
        'tva',
    ];
}
