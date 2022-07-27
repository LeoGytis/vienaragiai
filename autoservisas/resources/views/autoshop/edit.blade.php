@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit your Autoshop {{$autoshop->name}}</div>
                <div class="card-body">
                    <form method="POST" action="{{route('autoshop.update',$autoshop)}}">
                        Name: <input type="text" name="autoshop_name" value="{{$autoshop->name}}">
                        Address: <input type="text" name="autoshop_address" value="{{$autoshop->address}}">
                        Phone number: <input type="text" name="autoshop_phone_nr" value="{{$autoshop->phone_nr}}">
                        @csrf
                        <button type="submit">EDIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
