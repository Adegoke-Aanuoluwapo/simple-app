<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class build extends Model
{
    use HasFactory;
    protected $table = 'build';
    protected $fillable = ['name', 'email', 'phone', 'title', 'location', 'password', 'cv'];
}
