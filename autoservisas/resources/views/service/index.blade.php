@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">List of services</div>
                <div class="card-body">
                    @foreach ($services as $service)
                    <div class="list-info d-flex justify-content-between">
                        <div class="info i-block">
                            {{$service->name}}<br>
                            <b>Time: </b>{{$service->time}}<br>
                            <b>Price: </b>{{$service->price}}<br>
                            <a class="more-info-link" href="{{route('service.show', $service->id)}}" role="button">More info</a>
                        </div>
                        <div class="list-buttons">
                            <a class="btn btn-outline-success" href="{{route('service.edit',[$service])}}">Edit</a>
                            <form method="POST" action="{{route('service.destroy', [$service])}}">
                                @csrf
                                <button class="btn btn-outline-secondary ms-1" type="submit">Delete</button>
                            </form>
                        </div>
                        <div class="list-buttons">
                            <form method="post" action="{{route('front-add')}}">
                                @csrf
                                @method('post')
                                <input class="order-count" type="number" name="services_count">
                                <input type="hidden" value="{{$service->id}}" name="service_id">
                                <button class="btn btn-outline-success me-3" type="submit">Order</button>
                            </form>
                        </div>
                    </div>
                    <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
