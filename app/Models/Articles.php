<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;

    protected $fillable = [
        'MATNR',
        'MAKTX',
        'WERKS',
        'LABST',
        'ZSTOCK_RC',
        'ZSTOCK_RL',
        'status_article',
    ];

    protected $primaryKey = 'id';

    protected $table = 'articles';
}
