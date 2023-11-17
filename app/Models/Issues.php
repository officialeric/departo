<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issues extends Model
{
    use HasFactory;

    protected $connection = 'departo';
    protected $table = 'issues';

    protected $attributes = [
        'status' => 'Pending',
    ];
}
