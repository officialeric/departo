<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DitStudents extends Model
{
    use HasFactory;

    protected $connection = 'dit';
    protected $table = 'students';
}
