<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Drug;
use App\Models\Pharmacy;

class Basket extends Model
{
    use HasFactory;

    protected $table = 'baskets';
    protected $fillable = [
        'user_id',
        'total_price',
        'sms_code',
        'order_status',
    ];
}
