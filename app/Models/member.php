<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    use HasFactory;

    protected $table = 'members';

    protected $fillable = [
        'name', 'address', 'gender', 'member_code'
    ];

    // belongsTo yang berarti dimiliki oleh table package
    public function package() {
        return $this->belongsTo(Package::class);
    }

    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }
}
