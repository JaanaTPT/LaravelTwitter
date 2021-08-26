<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;


    public function post(){
        return $this->belongsTo(Post::class);
    }

    public function user() {
        //algul oli nii:
        //return $this->hasOne(User::class);
        return $this->belongsTo(User::class);
    }
}
