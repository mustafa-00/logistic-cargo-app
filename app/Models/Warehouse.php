<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $fillable = [
        'name',
        'capacity',
        'address',
    ];
=======
    protected $table = "warehouses";

    protected $fillable = [
        'name',
        'address',
        'capacity',
    ];


    /**
     * Get all of the products for the Warehouse
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany(Products::class, 'warehouse_id', 'id');
    }
>>>>>>> 07ae4ab2e875a4e2b184675419cb7b2f618c3abb
}
