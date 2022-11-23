<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class voetbal extends Model
{
    use HasFactory;
    protected $table = 'spelers';
    protected $primaryKey = 'spelerID';

    protected $fillable = ['naam', 'nationaliteit', 'marketwaarde', 'sterkebeen',];

}
