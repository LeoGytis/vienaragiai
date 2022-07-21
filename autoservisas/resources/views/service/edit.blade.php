@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create new autoshop</div>
                <div class="card-body">

                    <form method="POST" action="{{route('service.update',$service)}}">
                        Name: <input type="text" name="service_name" value="{{$service->name}}">
                        Time: <input type="text" name="service_time" value="{{$service->time}}">
                        Price: <input type="text" name="service_price" value="{{$service->price}}">
                        <select name="autoshop_id">
                            @foreach ($autoshops as $autoshop)
                            <option value="{{$autoshop->id}}" @if($autoshop->id == $service->autoshop_id) selected @endif>
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
