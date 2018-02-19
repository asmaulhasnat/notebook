<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notebook extends Model
{
   protected $fillable=['name'];
   public function note(){
   	return $this->hasMany(Note::class);
   }
}
