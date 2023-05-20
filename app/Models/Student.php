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

    public function usage()
    {
        return $this->hasOne(LMSUsage::class);
    }

    public function personality()
    {
        return $this->hasOne(Personality::class);
    }

    public function offers()
    {
        return $this->belongsToMany(Offer::class, 'student_offer', 'stud_no');
    }
}
