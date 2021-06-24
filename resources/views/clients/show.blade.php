@extends('layout')

@section('page-title', $client->name)
@section('content')


<div class="client-wrapper">
{{-- <img style="width:300px;" src="{{ asset('img/4.jpg') }}" alt=""> --}}
<h1>{{$client->name}}</h1>
<h2>CUI: {{$client->cui}}</h2>
<h2>TELEFON: {{$client->phone}}</h2>
<h2>ADRESA: {{$client->city}}</h2>

<H1>PERSOANE DE CONTACT</H1>
@foreach ($client->people as $person)
    {{$person->name}}
@endforeach


{{-- <h1><a href="{{route('people.delete', $client)}}">CLICK DREAPTA DELET</a></h1> --}}
 </div>

@endsection