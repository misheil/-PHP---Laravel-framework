<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','title','category_id','body','email',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    /**
        * Return the sluggable configuration array for this model.
        *
        * @return array
        */


    public function user(){
      return $this->belongsTo('App\User');
    }
    public function reply(){
      return $this->hasMany('App\Models\Reply');
    }
}
