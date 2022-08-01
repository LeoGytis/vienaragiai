@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">List of Orders</div>
                <div class="card-body">
                    @foreach ($orders as $order)
                    <div class="list-info d-flex justify-content-between">
                        <div class="info i-block"><br>
                            <b>Order for: </b><br>
                           
                            {{$order->count}}x {{$order->service->name}}<br><br>
                            <b>Mechanic: </b><br>
                            {{$order->service->serviceMechanic->name}} {{$order->service->serviceMechanic->surname}}<br><br>
                            <b>Autoshop: </b><br>
                            {{$order->service->serviceMechanic->mechanicAutoshop->name}}<br><br>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
