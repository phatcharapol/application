<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['title','body'];

    public function user(){
        return $this->belongsTo('App\User') ;
    }
    public function role(){
        return $this->belongsTo('App\Role') ;
    }
    public function category(){
        return $this->belongsTo('App\Category') ;
    }
}
