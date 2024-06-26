<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    use HasFactory;

    // untuk mendefinisikan table
    protected $table = 'transactions';

    // untuk mendefinisikan field atau apa saja yang bisa diisi
    protected $fillable = [
        'member_id', 'member_name', 'member_email', 'transaction_date', 'subtotal', 'discount', 'grand_total'
    ];

    // membuat relationship many to many dengan table product melalui pivot point transaction_product
    public function product()
    {
        return $this->belongsToMany(Product::class)
        ->withPivot('quantity', 'selling_price', 'sub_total');
    }
}
