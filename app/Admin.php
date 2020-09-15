<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public $table = 'wishlist';

    protected $fillable = [
        'Titel',
        'Subtitel',
        'Tekst',
        'Fotos',
        'Prijs'
    ];
}
