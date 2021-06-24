@extends('layout')

@section('page-title', $person->name)
@section('content')


<div class="person-wrapper">
<img style="width:300px;" src="{{ asset('img/4.jpg') }}" alt="">
<h1>{{$person->name}}</h1>
<h2>{{$person->email}}</h2>
<h2>{{$person->phone}}</h2>

{{-- <h1><a href="{{route('people.delete', $person)}}">CLICK DREAPTA DELET</a></h1> --}}
 </div>

@endsection