<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $tabel='Students';
    protected $primaryKey='id';
    protected $fillable=['name','age','email'];

    use HasFactory;
}
