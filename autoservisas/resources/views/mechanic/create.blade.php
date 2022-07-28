@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">Hire new Mechanic</div>
                <div class="card-body">
                    <form method="POST" action="{{route('mechanic.store')}}" enctype="multipart/form-data">
                        <div class="col-md-4 ms-3 mb-3">
                            Name: <input class="mb-3" type="text" name="mechanic_name">
                            Last name: <input class="mb-3" type="text" name="mechanic_surname">
                            Rating: <input class="mb-3" type="text" name="mechanic_rating">
                            <div class="form-group mb-3">
                                <label>Choose photo:</label>
                                <input class="form-control" type="file" name="mechanic_photo"/>
                            </div>
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
