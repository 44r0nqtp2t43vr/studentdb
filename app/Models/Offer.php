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
}
