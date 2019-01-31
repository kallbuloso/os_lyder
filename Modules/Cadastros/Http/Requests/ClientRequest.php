<?php

namespace Modules\Cadastros\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'person'=>'required|string',
            // 'carrying'=>'required|string|max:50',
            'name'=>'required|string|max:200',
            'nik_name'=>'max:50',
            'contact'=>'required_if:person,1|max:50',
            'cnpj_cpf'=>'required_if:person,1|max:20', // requerido se pessoa for jurídica
            'rg_ie'=>'required_if:person,1|max:20',
            'im'=>'required_if:person,1|max:20',
            'phone'=>'required_if:person,1|max:20',
            'celphone'=>'max:20',
            'gender'=>'required_if:person,0',
            'email'=>'max:150',
            'site'=>'max:150',
            'notice'=>'max:255',
            // 'last_purchase'=>'required|string|max:50',
            'status'=>'boolean',
            // 'attended_by'=>'required|integer',
            // 'last_updated_by'=>'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'contact.required_if' => 'Este campo é obrigatório quando :other for Jurídica',
            'cnpj_cpf.required_if' => 'Este campo é obrigatório quando :other for Jurídica',
            'rg_ie.required_if' => 'Este campo é obrigatório quando :other for Jurídica',
            'im.required_if' => 'Este campo é obrigatório quando :other for Jurídica',
            'phone.required_if' => 'Este campo é obrigatório quando :other for Jurídica',
            'gender.required_if' => 'Este campo é obrigatório quando :other for Física',
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
