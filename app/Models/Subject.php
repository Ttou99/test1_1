<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    public function Academicyear()
    {
        return $this->belongsTo(Academicyear::class);
    }

    public function Branch()
    {
        return $this->belongsTo(Branch::class);
    }

}

