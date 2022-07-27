@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">List of services</div>
                <div class="card-body">
                    @foreach ($services as $service)
                    <div class="list-info">
                        <div class="info">
                            {{$service->name}}<br>
                            <b>Time: </b>{{$service->time}}<br>
                            <b>Price: </b>{{$service->price}}<br>

                            <a class="btn btn-link btn-sm pl-0" href="{{route('service.show', $service->id)}}"
                                role="button">More info</a>

                            {{-- {{$service->serviceMechanic->name}}<br>
                            {{$service->serviceMechanic->surname}}<br> --}}
                        </div>
                        <div class="list-buttons">
                            <a class="btn btn-outline-success" href="{{route('service.edit',[$service])}}">EDIT</a>
                            <form method="POST" action="{{route('service.destroy', [$service])}}">
                                @csrf
                                <button class="btn btn-outline-secondary ms-3" type="submit">DELETE</button>
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
