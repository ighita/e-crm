@extends('layout')

@section('page-title', $cost->name)
@section('content')


<div class="cost-wrapper">
{{-- <img style="width:300px;" src="{{ asset('img/4.jpg') }}" alt=""> --}}
<h1>{{$cost->description}}</h1>
<h2>{{$cost->value}} LEI</h2>
<h2>{{$cost->created_at}}</h2>

{{-- <h1><a href="{{route('people.delete', $cost)}}">CLICK DREAPTA DELET</a></h1> --}}
 </div>

@endsection