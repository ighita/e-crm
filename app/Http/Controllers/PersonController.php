<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index($favorites = false)
    {
        $favorites = request()->input('favorites');
        return view('people.index', [
            'people' => $favorites == true ? Person::where('favorite', true)->get() : Person::get()
        ]);
    }

    public function show(Person $person)
    {
        return view('people.show', [
            'person' => $person
        ]);
    }

    public function create()
    {
        return view('people.create');
    }

    public function store()
    {
        Person::create($this->validatePerson());

        return redirect(route('people.index'));

    }

    public function edit(Person $person)
    {
        return view('people.edit', compact('person'));
    }

    public function update(Person $person)
    {

        $person->update($this->validatePerson());

        return redirect($person->path());
    }

    public function destroy(Person $person)
    {
        $person->delete();
        return redirect(route('people.index'));
    }

    public function favoriteToggle(Person $person)
    {
        // if($person->favorite == 0) $person->favorite = 1;
        if($person->favorite == 1) {
            $person->favorite = 0;
        }
        else if ($person->favorite == 0) {
            $person->favorite = 1;
        }
        $person->update();
        return redirect(route('people.index'));
    }

    public function validatePerson()
    {
        return request()->validate([
            'name'      => 'required',
            'email'     => 'required',
            'phone'     => 'required',
            'position'  => 'required'
        ]);
    }
}
