@extends('layout')

@section('page-title', 'Editare lead')
@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
@endsection

@section('content')
    <div class="edit-lead-wrapper">
        {{-- <form method="POST" action="/contacte/{{$lead->id}}"> --}}
        <form method="POST" action="{{route('leads.update', $lead)}}">
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
                    value="{{$lead->name}}"
                >
                @if ($errors->has('name'))
                    <p class="help is-danger">{{$errors->first('name')}}</p>                    
                @endif

            </div>

            <div class="field">
                <label class="label" for="score">Scor (incredere)</label>
            </div>
            <div class="control">
                <input 
                    class="input @error('score') is-danger @enderror" 
                    type="text" 
                    name="score" 
                    id="score" 
                    value="{{$lead->score}}"
                >
            </div>

            <div class="field">
                <label class="label" for="notes">Mentiuni</label>
            </div>
            <div class="control">
                <input 
                    class="input @error('notes') is-danger @enderror" 
                    type="text" 
                    name="notes" 
                    id="notes" 
                    value="{{$lead->notes}}"
                >
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
                    value="{{$lead->industry}}"
                >
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
                    value="{{$lead->source}}"
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