<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'name', 'description'
    ];

    // membuat relationship one to many dengan table product
    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
