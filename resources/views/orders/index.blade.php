@extends('layout')

@section('page-title', 'Comenzi')
@section('content')



<div class="orders-wrapper">
    <div class="projects">
     <div class="card">
         <div class="card-header">
            <a href="{{route('people.create')}}"><i class="las la-plus-circle"></i> Adauga</a>
         </div>
         <div class="card-body">
             <div class="table-responsive">
                 <table width="100%">
                     <thead>
                         <tr>
                             <td>Detalii Comanda</td>
                             <td>Client</td>
                             <td>Valoare</td>
                             <td>Status</td>
                             <td>Edit</td>
                         </tr>
                     </thead>
                     <tbody>
                         @foreach ($orders as $order)
                         <tr>
                            <td><a href="{{route('orders.show', $order)}}">{{$order->description}}</a></td>
                            <td>{{$order->client->name}}</td>
                            <td>{{$order->value}}</td>
                            <td>
                                {{-- <span class="status purple"></span> --}}
                                {{ Config::get('statuses.orders')[$order->status]}}
                            </td>
                            <td><a href="{{route('orders.edit', $order)}}">EDIT</a></td>
                        </tr>                             
                         @endforeach

 
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
    </div>

 </div>

@endsection