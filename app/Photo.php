<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $path = '/image/';
    protected $fillable = ['file'] ;

    public function getFileAttribute($file_name){
        return $this->path.$file_name ;
    }
    public function post(){
        return $this->hasOne('App\Post');
    }
}

