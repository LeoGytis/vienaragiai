@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List of services</div>
                <div class="card-body">
                    @foreach ($services as $service)
                    {{$service->name}}<br>
                    {{$service->time}}<br>
                    {{$service->price}}<br>
                    {{-- {{$service->serviceAutoshop->name}}<br> --}}
                    {{-- {{$service->serviceAutoshop->address}}<br> --}}

                    <a href="{{route('service.edit',[$service])}}">EDIT</a>


                    <form method="POST" action="{{route('service.destroy', [$service])}}">
                        @csrf
                        <button type="submit">DELETE</button>
                    </form>
                    <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
