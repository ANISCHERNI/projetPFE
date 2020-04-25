<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    //
use softDeletes;

    protected $fillable = [
        'title', 'content', 'category_id','image','slug'
    ];
    protected $dates=['delated_at'];


    public function getFeaturedAttribute($featured){
        return asset($featured);
    }
    

    public function category(){
       return $this->belongsTo('App\Category');
    }

    public function tags(){
        return $this->belongsToMany('App\Tag');
     }

}
