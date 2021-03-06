<?php

namespace Modules\Cadastros\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Cadastros\Models\Person;

class ProvidersController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('cadastros::clients.index', [
            'persons' => Person::provider()->get(),
            'title'=>'Fornecedores',
            'titleDetails'=>'Welcome to your custom panel!',
            'create'=>'provider.create',
            'show'=>'provider.show',
            'edit'=>'provider.edit',
            'destroy'=>'provider.destroy',
            'btnAddPerson'=>'Adicionar Novo fornecedor',
            ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('cadastros::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('cadastros::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('cadastros::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
