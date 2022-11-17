<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Drug;

class Basket extends Model
{
    use HasFactory;
    protected $table = 'baskets';
    protected $fillable = [
        'total_price',
        'user_id',
        'pharmacy_id',
        'drug_price',
        'drug_quantity',
    ];
    public function Drugs()
    {
        $this->belongsToMany(Drug::class);
    }
}
