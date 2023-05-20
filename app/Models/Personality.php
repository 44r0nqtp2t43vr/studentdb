<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personality extends Model
{
    // use HasFactory;
    protected $table = 'personality';
    public $timestamps = false;
    protected $primaryKey = 'stud_no';

    public function student()
    {
        return $this->belongsTo(Student::class, 'stud_no');
    }
}
