<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $table = 'branches';

    public $timestamps = true;

    protected $fillable =['name_branch','academicyear_id'];

    public function academicyear()
    {
        return $this->belongsTo(Academicyear::class);
    }


}
