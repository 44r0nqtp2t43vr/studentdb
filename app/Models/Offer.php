<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    // use HasFactory;
    protected $table = 'offer';
    public $timestamps = false;
    protected $primaryKey = 'offer_no';

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'offer_no');
    }

    public function students()
    {
        return $this->belongsToMany(Student::class, 'student_offer', 'offer_no');
    }
}
