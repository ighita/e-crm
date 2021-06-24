@extends('layout')

@section('page-title', 'Editare comanda')
@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
@endsection

@section('content')
    <div class="edit-order-wrapper">
        <form method="POST" action="{{route('orders.update', $order)}}">
            @csrf
            @method('PUT')

            <div class="field">
                <label class="label" for="company">Client</label>
            </div>
            <div class="control">
                <input 
                    class="input @error('company') is-danger @enderror" 
                    type="text" 
                    name="company" 
                    id="company" 
                    value="{{$order->company}}"
                >
                @if ($errors->has('company'))
                    <p class="help is-danger">{{$errors->first('company')}}</p>                    
                @endif

            </div>

            <div class="field">
                <label class="label" for="total">Valoare</label>
            </div>
            <div class="control">
                <input 
                    class="input @error('total') is-danger @enderror" 
                    type="text" 
                    name="total" 
                    id="total" 
                    value="{{$order->total}}"
                >
            </div>

            <div class="field">
                <label class="label" for="status">Status</label>
            </div>
            <div class="control">
                <input 
                    class="input @error('status') is-danger @enderror" 
                    type="text" 
                    name="status" 
                    id="status" 
                    value="{{$order->status}}"
                >
            </div>


            <div class="field">
                <div class="control">
                    <button class="button is-link" type="submit">Actualizeaza</button>
                </div>
            </div>


        </form>
    </div>
@endsection