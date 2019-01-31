<?php

namespace Modules\Cadastros\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'person',
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
        'notice',
        'last_purchase',
        'status',
        'attended_by',
        'last_updated_by',
    ];
    
    /**
     * Scope a query to only include Cliente
     *
     * @param  \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeClients($query)
    {
       return $query->whereMonth('created_at', '=', date('m'))
                    ->where('status', 1);
    }

}
