<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function posts(){
        return $this->hasMany(Post::class)->orderBy('created_at','DESC');
    }

    public function scopeSortTitle($query){
        return $query -> orderBy('title');
    }
}
