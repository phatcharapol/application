<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = 'posts' ;
    protected $fillable = ['title','body'];

    public function user(){
        return $this->belongsTo('App\User') ;
    }
    public function role(){
        return $this->belongsTo('App\Role') ;
    }
    public function photo(){
        return $this->belongsTo('App\Photo') ;
    }
    public function category(){
        return $this->belongsTo('App\Category') ;
    }
    public function comments(){
        return $this->hasMany('App\Comment') ;
    }
}
