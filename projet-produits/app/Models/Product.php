<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'produits_table';
    public $timestamps = false;

    // SANS CETTE LIGNE, LE "CREATE" NE MARCHERA PAS
    protected $fillable = ['nom', 'prix'];
}
