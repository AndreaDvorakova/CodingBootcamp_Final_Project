<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Drug;

class Pharmacy extends Model
{
    use HasFactory;

    public function drugs()
    {
        return $this->belongsToMany(Drug::class,'pharmacy_items')->withPivot('drug_quantity','drug_price');
    }
}
