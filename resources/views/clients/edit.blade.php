@extends('layout')

@section('page-title', 'Editare client')
@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
@endsection

@section('content')
    <div class="edit-client-wrapper">

        <form method="POST" action="{{route('clients.update', $client)}}">
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
                    value="{{$client->name}}"
                >
                @if ($errors->has('name'))
                    <p class="help is-danger">{{$errors->first('name')}}</p>                    
                @endif

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
                    value="{{$client->cui}}"
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
                    value="{{$client->phone}}"
                >
            </div>

            <div class="field">
                <label class="label" for="city">Oras</label>
            </div>
            <div class="control">
                <input 
                    class="input @error('city') is-danger @enderror" 
                    type="text" 
                    name="city" 
                    id="city" 
                    value="{{$client->city}}"
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