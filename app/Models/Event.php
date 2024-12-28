<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'calender'; // Nama tabel
    protected $fillable = ['title', 'date', 'time']; // Kolom yang dapat diisi
}
