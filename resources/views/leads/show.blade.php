@extends('layout')

@section('page-title', $lead->name)
@section('content')


<div class="lead-wrapper">
{{-- <img style="width:300px;" src="{{ asset('img/4.jpg') }}" alt=""> --}}
<h1>{{$lead->name}}</h1>
<h2>{{$lead->notes}}</h2>
<h2>{{$lead->industry}}</h2>

{{-- <h1><a href="{{route('people.delete', $lead)}}">CLICK DREAPTA DELET</a></h1> --}}
 </div>

@endsection