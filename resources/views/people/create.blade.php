@extends('layout')

@section('page-title', 'Adauga persoana noua')
@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
@endsection

@section('content')

    <div class="add-person-wrapper">
        <form method="POST" action="{{route('people.store')}}">
            @csrf

            <div class="field">
                <label class="label" for="name">Nume</label>
            </div>
            <div class="control">
                <input 
                    class="input @error('name') is-danger @enderror" 
                    type="text" 
                    name="name" 
                    id="name"
                    value="{{ old('name') }}"
                >
                @error('name')
                    <p class="help is-danger">{{$errors->first('name')}}</p>   
                @enderror
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
                    value="{{ old('email') }}" 
                    required
                >
                @error('email')
                <p class="help is-danger">{{$errors->first('email')}}</p>   
                @enderror
            </div>

            <div class="field">
                <label class="label" for="phone">Telefon</label>
            </div>
            <div class="control">
                <input class="input @error('phone') is-danger @enderror" 
                type="text" 
                name="phone" 
                id="phone"
                value="{{ old('phone') }}"  
                required
                >
                @error('phone')
                <p class="help is-danger">{{$errors->first('phone')}}</p>   
                @enderror
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
                    required
                    >
                @error('position')
                <p class="help is-danger">{{$errors->first('position')}}</p>   
                @enderror
            </div>

            <div class="field">
                <div class="control">
                    <button class="button is-link" type="submit">Adauga</button>
                </div>
            </div>


        </form>
    </div>
@endsection