<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    use HasFactory;
    // autoriser les champs à être remplis en masse (mass assignment) 
    // protection contre les attaques de type mass assignment
    protected $fillable=[
        'name',
        'description',
        'created_at',
        'updated_at',
    ];
}
