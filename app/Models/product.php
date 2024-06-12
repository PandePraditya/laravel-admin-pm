<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    // untuk mendefinisikan table
    protected $table = 'products';

    // untuk mendefinisikan field atau apa saja yang bisa diisi
    protected $fillable = [
        'category_id', 'name', 'unit', 'minimal_stock', 'maximal_stock', 'stock', 'selling_price', 'purchase_price'
    ];

    // membuat relationship one to many dengan table category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function transaction()
    {
        return $this->belongsToMany(transaction::class)->withPivot('quantity', 'selling_price', 'sub_total')->withTimestamps();
    }
}
