<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Reply extends Model
{

    // use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','user_id','posts_id','body',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    public function user(){
      return $this->belongsTo('App\User');
    }

    public function posts(){
      return $this->belongsTo('App\Models\posts');
    }
}
