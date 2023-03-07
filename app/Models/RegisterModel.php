<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class RegisterModel extends Model
{
    use HasFactory,Notifiable;
    protected $fillable = [
'customers_name','email','mobile','password','DOB','address'
    ];

    protected $table = "customers";
}
