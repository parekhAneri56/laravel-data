<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class AddEmployeeModel extends Model
{
    use HasFactory,Notifiable;
    protected $fillable = [
        'employee_name','mobile','post','salary','details'
    ];

    protected $table = 'addemployees';

}