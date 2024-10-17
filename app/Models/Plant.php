<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    use HasFactory;

    protected $table = 'my_plants';


    protected $fillable = [
        'name',
        'scientific_name',
        'img',
        'observations',
    ];
}
