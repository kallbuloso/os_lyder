<?php

namespace Modules\Cadastros\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = [
        'type_persona',
        'persona',
        'carrying',
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
     public function scopeMonth($query)
     {
        return $query->whereMonth('created_at', '=', date('m'));
     }

    /**
     * Scope a query to only include Person
     *
     * @param  \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
     public function scopePerson($query)
     {
        return $query->where('type_persona', 2)
                     ->where('status', 1);
     }

    /**
     * Scope a query to only include Person
     *
     * @param  \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
     public function scopeProvider($query)
     {
        return $query->where('type_persona', 1)
                     ->where('status', 1);
     }
}
