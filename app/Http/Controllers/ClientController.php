<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\State;
use App\Models\Town;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::get();
        echo view('clients.indexc', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $towns= Town::pluck('id','town');
        $states=State::pluck('id','state');
        echo view ('clients.createc', compact('states','towns'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Client::create($request->all());
        return to_route('clients.index') -> with('status', 'Cliente Registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        return view('clients.showc', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        $towns= Town::pluck('id','town');
        $states=State::pluck('id','state');
        echo view('clients.editc', compact('states','towns','client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        $data = $request->all();
        $client->update($data);
        return to_route('clients.index')->with('status',"Cliente Actualizado");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return to_route('clients.index') -> with('status', "Cliente Eliminado");
    }
}
