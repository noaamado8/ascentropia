<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreParticpantePost extends FormRequest
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
            'nome' => 'required|regex:/[a-zA-Z ]{2,254}/|max:225',
            'apelidos' => 'required|regex:/[a-zA-Z ]{2,254}/|max:501',
            'tipo_documento'=>'required',
            'numero' => 'required|string|min:9|max:10',
            'data_nacemento' => 'required|date',
            'mobil' => 'required|regex:/[0-9]/|min:9|max:12',
            'email' => 'required|regex:/[a-zA-Z ]{2,254}/|max:50',
            'actividade_id'=>'required'
        ];
    }
}
