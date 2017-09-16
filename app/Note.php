<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $guarded = array('id', 'updated_at', 'created_at');
    public function etudiant(){
    	return $this->belongsTo('App\Etudiant');
    }
}
