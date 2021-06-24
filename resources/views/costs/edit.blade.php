@extends('layout')

@section('page-title', 'Editare cheltuiala')
@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
@endsection

@section('content')
    <div class="edit-cost-wrapper">
        <form method="POST" action="{{route('costs.update', $cost)}}">
            @csrf
            @method('PUT')

            <div class="field">
                <label class="label" for="description">Descriere</label>
            </div>
            <div class="control">
                <input 
                    class="input @error('description') is-danger @enderror" 
                    type="text" 
                    name="description" 
                    id="description" 
                    value="{{$cost->description}}"
                >
                @if ($errors->has('description'))
                    <p class="help is-danger">{{$errors->first('description')}}</p>                    
                @endif

            </div>

            <div class="field">
                <label class="label" for="value">Valoare</label>
            </div>
            <div class="control">
                <input 
                    class="input @error('value') is-danger @enderror" 
                    type="text" 
                    name="value" 
                    id="value" 
                    value="{{$cost->value}}"
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