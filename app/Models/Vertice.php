<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vertice extends Model
{
    use HasFactory;
    protected $table = 'vertice_table';
    protected $primaryKey = 'id';
    protected $fillable = ['name'];
}
