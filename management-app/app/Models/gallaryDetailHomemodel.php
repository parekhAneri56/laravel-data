<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class gallaryDetailHomemodel extends Model
{
    use HasFactory,Notifiable;
    protected $fillable = [
        'galleryimage','name'
    ];

    protected $table = 'addgallaries';
}
