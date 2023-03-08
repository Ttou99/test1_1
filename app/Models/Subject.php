<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_subject',
        'academicyear_id',
        'branch_id',
        'semestre',
    ];
    protected $table = 'subjects';
    public $timestamps = true;

    public function branch()
    {
        return $this->belongsTo('App\Models\Branch','branch_id');
    }

    public function academicyear()
    {
        return $this->belongsTo('App\Models\Academicyear','academicyear_id');
    }
}

