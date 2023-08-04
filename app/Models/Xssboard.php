<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Xssboard extends Model
{
    use HasFactory;
    protected $table = 'xssboard';

    protected $fillable = ['comment'];
}
