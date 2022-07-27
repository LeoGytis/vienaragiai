@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Service {{$service->name}}</div>
                <div class="card-body">

                    <form method="POST" action="{{route('service.update',$service)}}">
                        Name: <input type="text" name="service_name" value="{{$service->name}}">
                        Time: <input type="text" name="service_time" value="{{$service->time}}">
                        Price: <input type="text" name="service_price" value="{{$service->price}}">
                        <select name="mechanic_id">
                            @foreach ($mechanics as $mechanic)
                            <option value="{{$mechanic->id}}" @if($mechanic->id == $service->mechanic_id) selected @endif>
                                {{$mechanic->name}} {{$mechanic->surname}}
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
