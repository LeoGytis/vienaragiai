@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">Edit Service {{$service->name}}</div>
                <div class="card-body">

                    <form class="d-flex flex-column align-items-center" method="POST" action="{{route('service.update',$service)}}">
                        <div class="col-md-4 ms-3 mb-3">
                            Name: <input type="text" name="service_name" value="{{$service->name}}">
                            Time: <input type="text" name="service_time" value="{{$service->time}}">
                            Price: <input type="text" name="service_price" value="{{$service->price}}">

                            <select class="mt-3" name="mechanic_id">
                                @foreach ($mechanics as $mechanic)
                                <option value="{{$mechanic->id}}" @if($mechanic->id == $service->mechanic_id) selected @endif>
                                    {{$mechanic->name}} {{$mechanic->surname}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        @csrf
                        <button class="btn btn-outline-success mt-3 mb-3" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
