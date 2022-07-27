@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">More information of the mechanic {{$mechanic->name}} {{$mechanic->surname}} </div>
                <div class="card-body">
                    <b>Name:</b> {{$mechanic->name}}<br>
                    <b>Last name:</b> {{$mechanic->surname}}<br>
                    <b>Photo:</b> {{$mechanic->photo}}<br>
                    <b>Rating:</b> {{$mechanic->rating}}<br><br>
                    <b>Autoshop:</b>
                    {{$mechanic->mechanicAutoshop->name}}
                    {{$mechanic->mechanicAutoshop->address}}<br>
                    <b>Services:</b>
                    @foreach ($services as $service)
                        @if ($service->serviceMechanic->id === $mechanic->id) 
                        {{$service->name}}
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
