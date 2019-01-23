<?php

namespace Modules\Cadastros\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'type',
        'name',
        'nik_name',
        'contact',
        'cnpj_cpf',
        'rg_ie',
        'im',
        'phone',
        'celphone',
        'gender',
        'email',
        'site',
        'password',
        'notice',
        'status',
        'attended_by',
        'last_updated_by',
    ];
}
