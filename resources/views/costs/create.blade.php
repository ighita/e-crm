@extends('layout')

@section('page-title', 'Adauga cheltuiala')
@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
@endsection

@section('content')

    <div class="add-cost-wrapper">
        <form method="POST" action="{{route('costs.store')}}">
            @csrf

            <div class="field">
                <label class="label" for="description">Descriere</label>
            </div>
            <div class="control">
                <input 
                    class="input @error('description') is-danger @enderror" 
                    type="text" 
                    name="description" 
                    id="description"
                    value="{{ old('description') }}"
                >
                @error('description')
                    <p class="help is-danger">{{$errors->first('description')}}</p>   
                @enderror
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
                    value="{{ old('value') }}" 
                    required
                >
                @error('value')
                <p class="help is-danger">{{$errors->first('value')}}</p>   
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