<?php

namespace App\Http\Controllers;

use App\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function index()
    {
        return view('leads.index', [
            'leads' => Lead::get()
        ]);
    }

    public function show(Lead $lead)
    {
        return view('leads.show', [
            'lead' => $lead
        ]);
    }

    public function create()
    {
        return view('leads.create');
    }

    public function store()
    {
        Lead::create($this->validateLead());
        return redirect( route('leads.index') );
    }

    public function edit(Lead $lead)
    {
        return view('leads.edit', compact('lead'));
    }

    public function update(Lead $lead)
    {
        $lead->update($this->validateLead());

        return redirect($lead->path());
    }

    public function destroy(Lead $lead)
    {
        $lead->delete();
        return redirect( route('leads.index') );
    }

    public function validateLead()
    {
        return request()->validate([
            'name' => 'required',
            'score'  => 'required',
            'notes'  => 'required',
            // 'status'  => 'required',
            'industry'  => 'required',
            'source'  => 'required',

        ]);
    }
}
