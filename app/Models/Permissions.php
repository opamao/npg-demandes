<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    use HasFactory;

    protected $fillable = [
        'signature_name',
        'signature',
        'status',
        'role_id',
    ];

    protected $table = 'permissions';
}
