@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hire new Mechanic</div>
                <div class="card-body">
                    <form method="POST" action="{{route('mechanic.store')}}">
                        Name: <input type="text" name="mechanic_name">
                        Last name: <input type="text" name="mechanic_surname">
                        Photo: <input type="text" name="mechanic_photo">
                        Rating: <input type="text" name="mechanic_rating">
                        <select name="autoshop_id">
                            @foreach ($autoshops as $autoshop)
                            <option value="{{$autoshop->id}}">{{$autoshop->name}} {{$autoshop->address}}</option>
                            @endforeach
                        </select>

                        @csrf
                        <button type="submit">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
