<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreText extends Model
{
    use HasFactory;
    protected $table = 'pretext';
    protected $fillable = ['contents'];
}
