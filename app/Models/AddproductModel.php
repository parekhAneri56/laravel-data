<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class AddproductModel extends Model
{
    use HasFactory,Notifiable;
    protected $fillable = [
        'product_name'
    ];

    protected $table = 'addproducts';
}
