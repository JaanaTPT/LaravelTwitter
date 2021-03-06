<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //protected $table = 'posts'; default andmebaasi tabeli nimi ongi posts (eeldab seda modeli/klasi nimest)

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function user() {
        //algul oli nii:
        //return $this->hasOne(User::class);
        return $this->belongsTo(User::class);
    }

}
