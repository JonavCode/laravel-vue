<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','description']; 

   public function user(){
       return $this->belongsTo('App\User');
   } 
}
