<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    // use HasFactory;
    protected $table = 'subject';
    public $timestamps = false;
    protected $primaryKey = 'subj_no';

    public function offers()
    {
        return $this->hasMany(Offer::class, 'subj_no');
    }
}
