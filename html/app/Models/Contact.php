<?php

/*
    Erasmo Cardoso da Silva
    App Desafio Alfasolft

*/

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // Soft delet

class Contact extends Model
{
    use HasFactory, SoftDeletes;

    // Define the fields
    protected $fillable = [
        'name',
        'contact',
        'email',
    ];


}
