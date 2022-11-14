<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pharmacy;

class Drug extends Model
{
    use HasFactory;

    public function Pharmacies()
    {
        $this->belongsToMany(Pharmacy::class);
    }
}
