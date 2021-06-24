@extends('layout')

@section('page-title', 'Persoane de contact')
@section('content')

<div class="people-wrapper">
    <div class="projects">
     <div class="card">
         <div class="card-header">
 <a href="{{route('people.create')}}"><i class="las la-plus-circle"></i> Adauga</a>
 {!! Request::input('favorites') ? 
    '<a href="/contacte"><i class="las la-star"></i>Vezi toate</a>' 
    : 
    '<a href="/contacte?favorites=1"><i class="las la-star"></i>Favorite</a>'
    !!}
{{-- <a href="route('people.index')"><i class="las la-star"></i>Vezi toate</a>
<a href="route('people.index', ['favorites' => 1])"><i class="las la-star"></i>Favorite</a> --}}
         </div>
         <div class="card-body">
             <div class="table-responsive">
                 <table width="100%">
                     <thead>
                         <tr>
                             <td  width="3%"></td> <!-- star -->
                             <td  width="3%"></td> <!-- edit -->
                             <td ></td> <!-- photo -->
                             <td>Nume</td>
                             <td>Companie</td>
                             <td>Email</td>
                             <td>Telefon</td>
                         </tr>
                     </thead>
                     <tbody>
                         @foreach ($people->sortDesc() as $person)
                         <tr>
                             <td class="table-icon">
                                <form method="POST" action="{{route('people.favorite', $person)}}">
                                    @csrf
                                    @method('PUT')
                                    <input 
                                        type="hidden" 
                                        name="favorite"
                                        value="{{$person->favorite ? 1 : 0}}"
                                    >
                                    <button class="star-button" type="submit"><span class="{{ $person->favorite ? 'las la-star' : 'lar la-star' }}"></span></button>
                                </form>                                 
                             </td>
                            {{-- <td class="table-icon"><a href="{{route('people.edit', $person)}}"><span class="{{ $person->favorite ? 'las la-star' : 'lar la-star' }}"></span></a></td> --}}
                            <td class="table-icon"><a href="{{route('people.edit', $person)}}"><span class="las la-user-edit"></span></a></td>
                            <td class="person-photo"><img src="https://i.pravatar.cc/50?img={{mt_rand(1,65)}}" alt=""></td>
                            <td><a href="{{route('people.show', $person)}}">{{$person->name}}</a><sub style="padding-left:15px;">{{$person->position}}</sub></td>
                            <td>{{ $person->client == true ?  $person->client->name : 'NEASIGNAT'}}</td>
                            <td>{{$person->email}}</td>
                            <td>
                                {{-- <span class="status purple"></span> --}}
                                {{$person->phone}}
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