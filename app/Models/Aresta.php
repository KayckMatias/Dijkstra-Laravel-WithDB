<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aresta extends Model
{
    use HasFactory;
    protected $table = 'aresta_table';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'weight', 'origin', 'dest'];
}
