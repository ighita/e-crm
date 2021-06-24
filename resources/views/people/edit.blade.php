@extends('layout')

@section('page-title', 'Editare contact')
@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
@endsection

@section('content')
    <div class="edit-person-wrapper">
        {{-- <form method="POST" action="/contacte/{{$person->id}}"> --}}
        <form method="POST" action="{{route('people.update', $person)}}">
            @csrf
            @method('PUT')

            <div class="field">
                <label class="label" for="name">Nume</label>
            </div>
            <div class="control">
                <input 
                    class="input @error('name') is-danger @enderror" 
                    type="text" 
                    name="name" 
                    id="name" 
                    value="{{$person->name}}"
                >
                @if ($errors->has('name'))
                    <p class="help is-danger">{{$errors->first('name')}}</p>                    
                @endif

            </div>

            <div class="field">
                <label class="label" for="email">Email</label>
            </div>
            <div class="control">
                <input 
                    class="input @error('email') is-danger @enderror" 
                    type="text" 
                    name="email" 
                    id="email" 
                    value="{{$person->email}}"
                >
            </div>

            <div class="field">
                <label class="label" for="phone">Telefon</label>
            </div>
            <div class="control">
                <input 
                    class="input @error('phone') is-danger @enderror" 
                    type="text" 
                    name="phone" 
                    id="phone" 
                    value="{{$person->phone}}"
                >
            </div>

            <div class="field">
                <label class="label" for="position">Functie</label>
            </div>
            <div class="control">
                <input 
                    class="input @error('position') is-danger @enderror" 
                    type="text" 
                    name="position" 
                    id="position" 
                    value="{{$person->position}}"
                >
            </div>

            <div class="field">
                <div class="control">
                    <button class="button is-link" type="submit">Actualizeaza</button>
                </div>
            </div>


        </form>
    </div>
@endsection