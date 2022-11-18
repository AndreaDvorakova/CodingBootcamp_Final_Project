<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pharmacy;

class Drug extends Model
{
    use HasFactory;

    public function pharmacies()
    {
        return $this->belongsToMany(Pharmacy::class, 'pharmacy_items', 'pharmacy_id', 'drug_id')->withPivot('drug_price', 'drug_quantity')->orderBy('drug_price', 'asc')->limit(5);
    }

    // public function cities()
    // {
    //     return $this->belongsToMany(Pharnacy::class);
    // }
}
