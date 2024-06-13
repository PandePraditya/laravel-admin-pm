<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class package extends Model
{
    use HasFactory;

    protected $table = 'packages';

    protected $fillable = [
        'price', 'discount_transaction', 'active'
    ];

    public function member() {
        return $this->hasMany(Member::class);
    }
}
