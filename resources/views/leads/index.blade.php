@extends('layout')

@section('page-title', 'Leaduri')
@section('content')


<div class="leads-wrapper">
    <div class="projects">
     <div class="card">
         <div class="card-header">
            <a href="{{route('leads.create')}}"><i class="las la-plus-circle"></i> Adauga</a>
         </div>
         <div class="card-body">
             <div class="table-responsive">
                 <table width="100%">
                     <thead>
                         <tr>
                             <td>Nume</td>
                             <td>Probabilitate</td>
                             <td>Mentiuni</td>
                             <td>Status</td>
                             <td>Industrie</td>
                             <td>Sursa</td>
                             <td>Edit</td>
                         </tr>
                     </thead>
                     <tbody>
                         @foreach ($leads as $lead)
                         <tr>
                            <td><a href="{{route('leads.show', $lead)}}">{{$lead->name}}</a></td>
                            <td>{{Config::get('statuses.lead_score')[$lead->score]}}</td>
                            <td>{{$lead->notes}}</td>
                            <td>{{Config::get('statuses.leads')[$lead->status]}}</td>
                            <td>{{$lead->industry}}</td>
                            <td>{{$lead->source}}</td>
                            {{-- <td>
                                <span class="status purple"></span>
                                {{$lead->status}}
                            </td> --}}
                            <td><a href="{{route('leads.edit', $lead)}}">EDIT</a></td>
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