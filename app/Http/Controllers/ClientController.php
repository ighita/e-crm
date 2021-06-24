<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return view('clients.index', [
            'clients' => Client::get()
        ]);
    }

    public function show(Client $client)
    {
        return view('clients.show', [
            'client' => $client
        ]);
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store()
    {
        Client::create($this->validateClient());
        return redirect( route('clients.index') );
    }

    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    public function update(Client $client)
    {
        $client->update($this->validateClient());

        return redirect($client->path());
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return redirect( route('clients.index') );
    }

    public function validateClient()
    {
        return request()->validate([
            'name' => 'required',
            'cui'  => 'required',
            'city'  => 'required',
            'phone'  => 'required'
        ]);
    }
}
