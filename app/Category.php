<?php

namespace App;
use App\Blog;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable =['name' , 'slug'];

    public function blog() {
        return $this->belongsToMany(Blog::class);
    }
}
