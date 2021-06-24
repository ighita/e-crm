@extends('layout')

@section('page-title', 'Adauga comanda noua')
@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
@endsection

@section('content')

    <div class="add-order-wrapper">
        <form method="POST" action="{{route('orders.store')}}">
            @csrf

            <div class="field">
                <label class="label" for="company">Client</label>
            </div>
            <div class="control">
                <input 
                    class="input @error('company') is-danger @enderror" 
                    type="text" 
                    name="company" 
                    id="company"
                    value="{{ old('company') }}"
                >
                @error('company')
                    <p class="help is-danger">{{$errors->first('company')}}</p>   
                @enderror
            </div>

            <div class="field">
                <label class="label" for="total">Valoare [ de modificat ]</label>
            </div>
            <div class="control">
                <input 
                    class="input @error('total') is-danger @enderror" 
                    type="text" 
                    name="total" 
                    id="total"
                    value="{{ old('total') }}" 
                    required
                >
                @error('total')
                <p class="help is-danger">{{$errors->first('total')}}</p>   
                @enderror
            </div>

            <div class="field">
                <label class="label" for="status">Status</label>
            </div>
            <div class="control">
                <input class="input @error('status') is-danger @enderror" 
                type="text" 
                name="status" 
                id="status"
                value="{{ old('status') }}"  
                required
                >
                @error('status')
                <p class="help is-danger">{{$errors->first('status')}}</p>   
                @enderror
            </div>



            <div class="field">
                <div class="control">
                    <button class="button is-link" type="submit">Adauga</button>
                </div>
            </div>


        </form>
    </div>
@endsection