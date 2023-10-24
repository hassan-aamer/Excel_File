<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserExcel extends Model
{
    use HasFactory;
    protected $fillable = ['Name','Email','Phone'];
}
