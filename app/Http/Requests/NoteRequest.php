<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class NoteRequest extends Request
{
   
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [ 
            'matiere' => 'required|min:2|max:20|alpha', 
            'coeficient' => 'required|integer',    
            'note' => 'required',   
        ];
    }
}
