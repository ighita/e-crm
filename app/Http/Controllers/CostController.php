<?php

namespace App\Http\Controllers;

use App\Cost;
use Illuminate\Http\Request;

class CostController extends Controller
{
    public function index()
    {
        return view('costs.index', [
            'costs' => Cost::get()
        ]);
    }

    public function show(Cost $cost)
    {
        return view('costs.show', [
            'cost' => $cost
        ]);
    }

    public function create()
    {
        return view('costs.create');
    }

    public function store()
    {
        Cost::create($this->validateCost());
        return redirect( route('costs.index') );
    }

    public function edit(Cost $cost)
    {
        return view('costs.edit', compact('cost'));
    }

    public function update(Cost $cost)
    {
        $cost->update($this->validateCost());

        return redirect($cost->path());
    }

    public function destroy(Cost $cost)
    {
        $cost->delete();
        return redirect( route('costs.index') );
    }

    public function validateCost()
    {
        return request()->validate([
            'description' => 'required',
            'value'  => 'required'
        ]);
    }
}
