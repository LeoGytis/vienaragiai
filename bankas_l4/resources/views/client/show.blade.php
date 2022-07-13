@extends('main')

@section('content')

<div class="col-10 mx-auto">
    <div class="card mt-4">
        <div class="card-header card-color">
            <h2>{{$client->name}} {{$client->surname}}</h2>
        </div>
        <div class="card-body">
            <div class="thin-line card-color text-center mb-3"></div>
            <ul class="list-group">
                <li class="list-group-item">
                    <div class="one-client">
                        <div>
                            <b>Account number:</b> {{$client->account_nr}}<br>
                                <b>Social ID:</b> {{$client->social_id}}<br>
                                    <b>Created at:</b> {{$client->created_at}}<br>
                        </div>
                            <span class="font-weight-bold mt-3 mb-2" style="font-size: 20px">{{$client->funds}}€</span>
                    </div>
                </li>
                <div class="thin-line card-color text-center mt-3"></div>
            </ul>
        </div>
    </div>
</div>
@endsection
