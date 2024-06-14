<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\milkteaController;

class milkteaModel extends Model
{
    use HasFactory;

    protected $table = 'milktea_models';

    protected $timestamp = false;

    protected $fillable = [
        'milktea',
        'size',
        'price',
        'pearl',
    ];

}
