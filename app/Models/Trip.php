<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $fillable = ['nama', 'StartDate', 'EndDate', 'minimal', 'maksimal', 'description', 'TourGuideName', 'img_path', 'price'];
}
