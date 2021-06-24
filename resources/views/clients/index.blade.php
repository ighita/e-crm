@extends('layout')

@section('page-title', 'Clienti')
@section('content')

<div class="clients-wrapper">
    <div class="projects">
     <div class="card">
         <div class="card-header">
            <a href="{{route('clients.create')}}"><i class="las la-plus-circle"></i> Adauga</a>
         </div>
         <div class="card-body">
             <div class="table-responsive">
                 <table width="100%">
                     <thead>
                         <tr>
                             <td  width="5%"></td> <!-- edit -->
                             <td>Nume</td>
                             <td>CUI</td>
                             <td>Telefon</td>
                         </tr>
                     </thead>
                     <tbody>
                         @foreach ($clients->sortDesc() as $client)
                         <tr>
                            <td class="table-icon"><a href="{{route('clients.edit', $client)}}"><span class="las la-user-edit"></span></a></td>
                            <td><a href="{{route('clients.show', $client)}}">{{$client->name}}</a></td>
                            <td>{{$client->cui}}</td>
                            <td>
                                {{-- <span class="status purple"></span> --}}
                                {{$client->phone}}
                            </td>
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