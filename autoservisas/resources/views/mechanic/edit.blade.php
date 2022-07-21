@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit information of the mechanic</div>
                <div class="card-body">
                    <form method="POST" action="{{route('mechanic.update',$mechanic)}}">
                        Name: <input type="text" name="mechanic_name" value="{{$mechanic->name}}">
                        Last name: <input type="text" name="mechanic_surname" value="{{$mechanic->surname}}">
                        Photo: <input type="text" name="mechanic_photo" value="{{$mechanic->photo}}">
                        Rating: <input type="text" name="mechanic_rating" value="{{$mechanic->rating}}">
                        <select name="autoshop_id">
                            @foreach ($autoshops as $autoshop)
                            <option value="{{$autoshop->id}}" @if($autoshop->id == $mechanic->autoshop_id) selected @endif>
                                {{$autoshop->name}} {{$autoshop->address}}
                            </option>
                            @endforeach
                        </select>
                        @csrf
                        <button type="submit">EDIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
