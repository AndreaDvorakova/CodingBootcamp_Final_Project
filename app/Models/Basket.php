<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Drug;
use App\Models\Pharmacy;

class Basket extends Model
{
    use HasFactory;

    // public function drugs()
    // {
    //     return $this->hasMany(Drug::class, 'id', 'drug_id');
    // }

    // public function pharmacy()
    // {
    //     return $this->belongsTo(Pharmacy::class);
    // }
}
