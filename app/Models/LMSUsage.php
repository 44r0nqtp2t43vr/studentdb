<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LMSUsage extends Model
{
    // use HasFactory;
    protected $table = 'lms_usage';
    public $timestamps = false;
    protected $primaryKey = 'stud_no';
}
