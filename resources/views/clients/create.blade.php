@extends('layout')

@section('page-title', 'Adauga client nou')
@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
@endsection

@section('content')

    <div class="add-client-wrapper">
        <form method="POST" action="{{route('clients.store')}}">
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
                <label class="label" for="cui">CUI</label>
            </div>
            <div class="control">
                <input 
                    class="input @error('cui') is-danger @enderror" 
                    type="text" 
                    name="cui" 
                    id="cui"
                    value="{{ old('cui') }}" 
                    required
                >
                @error('email')
                <p class="help is-danger">{{$errors->first('cui')}}</p>   
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
                <label class="label" for="city">Adresa</label>
            </div>
            <div class="control">
                <input 
                    class="input @error('city') is-danger @enderror" 
                    type="text" 
                    name="city" 
                    id="address" 
                    required
                    >
                @error('city')
                <p class="help is-danger">{{$errors->first('city')}}</p>   
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