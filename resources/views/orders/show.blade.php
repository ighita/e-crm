@extends('layout')

@section('page-title', $order->name)
@section('content')


<div class="order-wrapper">
{{-- <img style="width:300px;" src="{{ asset('img/4.jpg') }}" alt=""> --}}
<h1>{{$order->company}}</h1>
<h2>{{$order->total}}</h2>
<h2>{{$order->status}}</h2>

{{-- <h1><a href="{{route('people.delete', $order)}}">CLICK DREAPTA DELET</a></h1> --}}
 </div>

@endsection