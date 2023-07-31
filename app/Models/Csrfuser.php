<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Csrfuser extends Model
{
    use HasFactory;
    protected $table = 'csrfuser';
}
