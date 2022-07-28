@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">Edit information of the mechanic {{$mechanic->name}} {{$mechanic->surname}} </div>
                <div class="card-body">
                    <form class="d-flex d-flex flex-column align-items-start" method="POST" action="{{route('mechanic.update',$mechanic)}}">
                        Name: <input type="text" name="mechanic_name" value="{{$mechanic->name}}">
                        Last name: <input type="text" name="mechanic_surname" value="{{$mechanic->surname}}">
                        Rating: <input class="mb-3" type="text" name="mechanic_rating" value="{{$mechanic->rating}}">
                        <select class="mb-3" name="autoshop_id">
                            @foreach ($autoshops as $autoshop)
                            <option value="{{$autoshop->id}}" @if($autoshop->id == $mechanic->autoshop_id) selected @endif>
                                {{$autoshop->name}} {{$autoshop->address}}
                            </option>
                            @endforeach
                        </select>
                        @if($mechanic->photo)
                        <div class="image-box">
                            <img src="{{$mechanic->photo}}">
                        </div>
                        @endif
                        @csrf
                        @method('put')
                        <button class="btn btn-outline-success mb-3" type="submit">EDIT</button>
                    </form>

                    @if($mechanic->photo)
                    <form action="{{route('mechanic-delete-picture', $mechanic)}}" method="post">
                        @csrf
                        @method('put')
                        <button class="btn btn-outline-danger" type="submit">Delete picture</button>
                    </form>
                    @endif
                    {{-- <form class="d-flex d-flex flex-column align-items-start" method="POST" action="{{route('mechanic.update',$mechanic)}}" enctype="multipart/form-data">
                        @if($mechanic->photo)
                        <div class="image-box">
                            <img src="{{$mechanic->photo}}">
                        </div>
                        <div class="form-group">
                            <label>Photo of the mechanic</label>
                            <input class="form-control" type="file" name="mechanic_photo"/>
                        </div>
                        @endif
                        @csrf
                        @method('put')
                        <button class="btn btn-outline-success mt-3" type="submit">Delete photo</button>
                    </form> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
