<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class builds extends Model
{
    use HasFactory;
    protected $table = 'builds';
    protected $fillable = ['name', 'email', 'phone', 'title', 'location', 'cv'];
}