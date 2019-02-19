<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Category;

class Blog extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['title', 'body' , 'featured_image' , 'slug' , 'meta_title' , 'meta_description' , 'status'];


    //When I reference the blog ill have access to the category down the road
    public function category() {
        return $this->belongsToMany(Category::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

}
