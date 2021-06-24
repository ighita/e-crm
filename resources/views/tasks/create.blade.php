@extends('layout')

@section('page-title', 'Adauga sarcina noua')
@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
@endsection

@section('content')

    <div class="add-task-wrapper">
        <form method="POST" action="{{route('tasks.store')}}">
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
                <label class="label" for="due_date">Termen</label>
            </div>
            <div class="control">
                <input 
                    class="input @error('due_date') is-danger @enderror" 
                    type="date" 
                    name="due_date" 
                    id="due_date"
                    value="{{ old('due_date') }}" 
                    required
                >
                @error('due_date')
                <p class="help is-danger">{{$errors->first('due_date')}}</p>   
                @enderror
            </div>

            <div class="field">
                <label class="label" for="priority">Prioritate</label>
            </div>
            <div class="control">
                <input class="input @error('priority') is-danger @enderror" 
                type="text" 
                name="priority" 
                id="priority"
                value="{{ old('priority') }}"  
                required
                >
                @error('priority')
                <p class="help is-danger">{{$errors->first('priority')}}</p>   
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