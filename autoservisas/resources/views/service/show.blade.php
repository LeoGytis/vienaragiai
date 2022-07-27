@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">More information of the service {{$service->name}} {{$service->surname}} </div>
                <div class="card-body">
                    <b>Name:</b> {{$service->name}}<br>
                    <b>Time:</b> {{$service->time}}<br>
                    <b>Price:</b> {{$service->price}}<br>
                    <b>Mechanic:</b>
                    {{$service->serviceMechanic->name}}
                    {{$service->serviceMechanic->surname}}<br>
                    <br><b>Autoshops:</b><br>
                    @foreach ($mechanics as $mechanic)
                    @foreach ($autoshops as $autoshop)
                    @if ($mechanic->mechanicAutoshop->id === $autoshop->id)
                    {{$autoshop->name}}<br>
                    @break
                    @endif
                    @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
