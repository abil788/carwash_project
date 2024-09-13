<?php

// app/Models/TakeBook.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TakeBook extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'no_hp', 'car_type', 'time', 'message', 'status'];
}
