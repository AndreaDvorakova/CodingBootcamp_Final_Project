<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pharmacy_item;

class BasketItem extends Model
{
    use HasFactory;
    protected $table = 'basket_items';
    protected $fillable = [
        'user_id',
        'drug_id',
        'pharmacy_id',
        'drug_price',
        'quantity',
    ];

    public function drug()
    {
        return $this->belongsTo(Drug::class);
    }

    public function pharmacy()
    {
        return $this->belongsTo(Pharmacy::class);
    }
}
