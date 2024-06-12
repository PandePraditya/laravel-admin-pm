<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionProduct extends Model
{
    use HasFactory;

    protected $table = 'transaction_products';

    protected $fillable = [
        'quantity', 'selling_price', 'sub_total'
    ]; // product_id dan transaction_id tidak perlu didefinisikan karena primary key

    public $timestamps = false; // tidak memerlukan created_at dan updated_at
}
