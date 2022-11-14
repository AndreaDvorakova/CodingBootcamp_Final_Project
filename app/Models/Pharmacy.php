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
        $this->belongsToMany(Drug::class);
    }
}
