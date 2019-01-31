<?php

namespace Modules\Cadastros\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // 'type_persona'=>'required|string|max:50',
            'person'=>'required|integer',
            // 'carrying'=>'required|string|max:50',
            'name'=>'required|string|max:200',
            'nik_name'=>'string|max:50',
            'contact'=>'string|max:50',
            'cnpj_cpf'=>'string|max:20',
            'rg_ie'=>'string|max:20',
            'im'=>'string|max:20',
            'phone'=>'string|max:20',
            'celphone'=>'string|max:20',
            'gender'=>'required|integer',
            'email'=>'string|max:150',
            'site'=>'string|max:150',
            'notice'=>'string|max:255',
            // 'last_purchase'=>'required|string|max:50',
            'status'=>'boolean',
            // 'attended_by'=>'required|integer',
            // 'last_updated_by'=>'required|integer',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
