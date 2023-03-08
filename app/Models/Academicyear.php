<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academicyear extends Model
{
    use HasFactory;

    protected $table = 'academicyears';
    protected $fillable =['name'];

    public $timestamps = true;

    public function branche()
    {
        return $this->hasMany(Branch::class);
    }



}
