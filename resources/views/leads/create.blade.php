@extends('layout')

@section('page-title', 'Adauga lead nou')
@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
@endsection

@section('content')

    <div class="add-lead-wrapper">
        <form method="POST" action="{{route('leads.store')}}">
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
                <label class="label" for="score">Scor</label>
            </div>
            <div class="control">
                <input 
                    class="input @error('score') is-danger @enderror" 
                    type="text" 
                    name="score" 
                    id="score"
                    value="{{ old('score') }}" 
                    required
                >
                @error('score')
                <p class="help is-danger">{{$errors->first('score')}}</p>   
                @enderror
            </div>

            <div class="field">
                <label class="label" for="notes">Mentiuni</label>
            </div>
            <div class="control">
                <input class="input @error('notes') is-danger @enderror" 
                type="text" 
                name="notes" 
                id="notes"
                value="{{ old('notes') }}"  
                required
                >
                @error('notes')
                <p class="help is-danger">{{$errors->first('notes')}}</p>   
                @enderror
            </div>

            <div class="field">
                <label class="label" for="industry">Industrie</label>
            </div>
            <div class="control">
                <input 
                    class="input @error('industry') is-danger @enderror" 
                    type="text" 
                    name="industry" 
                    id="industry" 
                    required
                    >
                @error('industry')
                <p class="help is-danger">{{$errors->first('industry')}}</p>   
                @enderror
            </div>

            <div class="field">
                <label class="label" for="source">Sursa</label>
            </div>
            <div class="control">
                <input 
                    class="input @error('source') is-danger @enderror" 
                    type="text" 
                    name="source" 
                    id="source" 
                    required
                    >
                @error('source')
                <p class="help is-danger">{{$errors->first('source')}}</p>   
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