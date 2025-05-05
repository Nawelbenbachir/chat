<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactories;
use Illuminate\Database\Eloquent\Model;


class Message extends Model
{
    use HasFactory, Notifiable;
}
