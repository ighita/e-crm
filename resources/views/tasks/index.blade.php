@extends('layout')

@section('page-title', 'Sarcini')
@section('content')

<div class="tasks-wrapper">
    <div class="projects">
     <div class="card">
         <div class="card-header">
            <a href="{{route('tasks.create')}}"><i class="las la-plus-circle"></i> Adauga</a>
         </div>
         <div class="card-body">
             <div class="table-responsive">
                 <table width="100%">
                     <thead>
                         <tr>
                             <td>Descriere</td>
                             <td>Persoana asignata</td>
                             <td>Adaugat de</td>
                             <td>Termen</td>
                             <td>Prioritate</td>
                             <td>Edit</td>
                         </tr>
                     </thead>
                     <tbody>
                         @foreach ($tasks as $task)
                         <tr>
                            <td><a href="{{route('tasks.show', $task)}}">{{$task->description}}</a></td>
                            <td>{{$task->assigned_to->name}}</td>
                            <td>{{$task->task_creator->name}}</td>
                            <td>{{$task->due_date}}</td>
                            <td>
                                <span class="status purple"></span>
                                {{ Config::get('statuses.priority')[$task->priority] }}
                            </td>

                            <td><a href="{{route('tasks.edit', $task)}}">EDIT</a></td>
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