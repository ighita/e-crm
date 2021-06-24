@extends('layout')

@section('page-title', 'Cheltuieli')
@section('content')

<div class="costs-wrapper">
    <div class="projects">
     <div class="card">
         <div class="card-header">
            <a href="{{route('costs.create')}}"><i class="las la-plus-circle"></i> Adauga</a>
         </div>
         <div class="card-body">
             <div class="table-responsive">
                 <table width="100%">
                     <thead>
                         <tr>
                            <td  width="5%"></td> <!-- edit -->
                             <td>Descriere</td>
                             <td>Valoare</td>
                             <td>Data</td>
                         </tr>
                     </thead>
                     <tbody>
                         @foreach ($costs as $cost)
                         <tr>
                            <td class="table-icon"><a href="{{route('costs.edit', $cost)}}"><span class="las la-user-edit"></span></a></td>
                            <td><a href="{{route('costs.show', $cost)}}">{{$cost->description}}</a></td>
                            <td>{{$cost->value}} lei</td>
                            <td>
                                {{-- <span class="status purple"></span> --}}
                                {{$cost->created_at}}
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