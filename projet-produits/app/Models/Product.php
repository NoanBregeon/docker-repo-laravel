<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'produits_table';
    protected $primaryKey = 'id'; // On précise que c'est 'id'
    public $incrementing = true;  // On force l'auto-incrément au niveau Laravel
    protected $keyType = 'int';   // On précise que c'est un entier

    public $timestamps = false;
    protected $fillable = ['nom', 'prix'];
}
