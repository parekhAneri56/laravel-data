<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class addblogmodel extends Model
{
    use HasFactory,Notifiable;
    protected $fillable = [
        'blog_categories_id','blogimage','Writer_name','title','description'
    ];

    protected $table = 'addblogs';

}
