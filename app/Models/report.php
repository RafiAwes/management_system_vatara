<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class report extends Model
{
    use HasFactory;

    protected $table = 'reports';

    protected $fillable = [
        'month',
        'year',
        'students_admitted',
        'students_graduated',
        'revenue',
        'expenses',
    ];
}
