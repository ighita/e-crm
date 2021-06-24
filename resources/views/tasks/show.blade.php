@extends('layout')

@section('page-title', $task->name)
@section('content')


<div class="task-wrapper">
{{-- <img style="width:300px;" src="{{ asset('img/4.jpg') }}" alt=""> --}}
<h1>{{$task->description}}</h1>
<h2>{{$task->due_date}}</h2>
{{-- <h2>{{$task->phone}}</h2> --}}

{{-- <h1><a href="{{route('people.delete', $task)}}">CLICK DREAPTA DELET</a></h1> --}}
 </div>

@endsection