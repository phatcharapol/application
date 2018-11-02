<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class Post extends Model
{
    //
    use sluggable ;
    protected $table = 'posts' ;
    protected $fillable = ['title','body','slug'];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
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
