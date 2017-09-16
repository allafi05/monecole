<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EtudiantRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [ 
            'matricule' => 'required|min:2|max:20|alpha_num', 
            'prenom' => 'required|min:2|max:25|alpha', 
            'nom' => 'required|min:2|max:20|alpha',
            'adresse' => 'min:5|max:50|alpha', 
            'nationalite' => 'min:5|max:20|alpha', 
            'lieu_naissance' => 'min:2|max:20|alpha', 
            'email' => 'email',   
            'date_naissance' => 'date',   
            'sexe' => 'required',
        ];
    }
}
