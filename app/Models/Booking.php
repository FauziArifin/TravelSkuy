<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['trip_id', 'user_id'];

    public function Trip()
    {
        return $this->belongsTo('App\Models\Trip');
    }

    public function User()
    {
        return $this->belongsTo('App\Models\User');
    }
}
