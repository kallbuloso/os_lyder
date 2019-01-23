<?php

namespace Modules\Cadastros\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Cadastros\Models\Client;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('cadastros::clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('cadastros::clients.create');
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
    public function show(Client $id)
    {
        return view('cadastros::clients.show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit(Client $id)
    {
        return view('cadastros::clients.edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, Client $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy(Client $id)
    {
    }
}
