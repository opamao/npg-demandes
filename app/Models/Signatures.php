<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signatures extends Model
{
    use HasFactory;

    protected $fillable = [
        'signature_name',
        'signature',
        'status',
        'favorite',
    ];

    protected $table = 'signatures';
}
