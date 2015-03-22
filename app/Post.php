<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 16.03.15
 * Time: 20:42
 */

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;


class Post extends Eloquent{

    protected $fillable = [
      'title', 'body', 'user_id'
    ];

    public function user(){

        return $this->belongsTo('App\User');

    }

    public function comments(){

        return $this->hasMany('App\Comment');

    }
}