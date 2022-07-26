@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">Hire new Mechanic</div>
                <div class="card-body">
                    <form method="POST" action="{{route('mechanic.store')}}">
                        <div class="col-md-4 ms-3 mb-3">
                            Name: <input class="mb-3" type="text" name="mechanic_name">
                            Last name: <input class="mb-3" type="text" name="mechanic_surname">
                            Photo: <input class="mb-3" type="text" name="mechanic_photo">
                            Rating: <input class="mb-3" type="text" name="mechanic_rating">
                            Choose autoshop:
                            <select class="mb-3" name="autoshop_id">
                                @foreach ($autoshops as $autoshop)
                                <option  value="{{$autoshop->id}}">{{$autoshop->name}} {{$autoshop->address}}</option>
                                @endforeach
                            </select>

                            @csrf
                            <button class="btn btn-outline-success mt-3" type="submit">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
