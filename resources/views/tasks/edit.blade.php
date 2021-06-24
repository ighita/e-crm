@extends('layout')

@section('page-title', 'Editare sarcina')
@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
@endsection

@section('content')
    <div class="edit-task-wrapper">
        {{-- <form method="POST" action="/contacte/{{$task->id}}"> --}}
        <form method="POST" action="{{route('tasks.update', $task)}}">
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
                    value="{{$task->description}}"
                >
                @if ($errors->has('description'))
                    <p class="help is-danger">{{$errors->first('description')}}</p>                    
                @endif

            </div>

            <div class="field">
                <label class="label" for="priority">Prioritate</label>
            </div>
            <div class="control">
                <input 
                    class="input @error('priority') is-danger @enderror" 
                    type="text" 
                    name="priority" 
                    id="priority" 
                    value="{{$task->priority}}"
                >
            </div>

            <div class="field">
                <label class="label" for="due_date">Termen</label>
            </div>
            <div class="control">
                <input 
                    class="input @error('due_date') is-danger @enderror" 
                    type="text" 
                    name="due_date" 
                    id="due_date" 
                    value="{{$task->due_date}}"
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