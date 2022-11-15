<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pharmacy_item extends Model
{
    use HasFactory;

    public function pharmacyDrugs()
    {
        $this->belongsToMany(Drug::class);
    }
}
