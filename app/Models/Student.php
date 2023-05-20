<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // use HasFactory;
    protected $table = 'student';
    public $timestamps = false;
    protected $primaryKey = 'stud_no';

    public function personalities()
    {
        return $this->hasMany(Personality::class, 'stud_no');
    }
}
