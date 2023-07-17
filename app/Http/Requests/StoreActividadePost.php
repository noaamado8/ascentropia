<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreActividadePost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            
            'titulo' => 'required|max:501',
            'categoria' => 'required|max:501',
            'horario' => 'required|max:3000',
            'descripcion' => 'required|max:10000',
            'aforo'=>'numeric',
            'prezo'=>'numeric',
            'imaxe'=>'required'




            


        ];
    }
}
