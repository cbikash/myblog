<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    protected $fillable =[
        'title',
        'content',
        'user_id',
    ];

    public function images(){
        return $this->morphToMany('App\Models\Image','imageable');
    }

}
