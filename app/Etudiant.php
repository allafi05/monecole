<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
	protected $guarded = array('id', 'updated_at', 'created_at');

	public function notes() 
	{
		return $this->hasMany('App\Note');
	}

}
