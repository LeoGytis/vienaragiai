@extends('main')

@section('content')

<div class="col-10 mx-auto">
    <div class="card mt-4">
        <div class="card-header">
            <h2>{{$client->name}} {{$client->surname}}</h2>
        </div>
        <div class="card-body">
            <ul class="list-group">
                <div class="thin-line text-center mb-3">
                </div>
                <li class="list-group-item">
                    <div class="one-client">
                        <div>
                            {{$client->account_nr}}<br>
                            {{$client->social_id}}<br>
                        </div>
                        <div class="d-flex flex-column bd-highlight text-center mb-3">
                            <span class="font-weight-bold mt-3 mb-2">{{$client->funds}}€</span>
                        </div>
                    </div>
                </li>
                <div class="thin-line mt-3"></div>
            </ul>
        </div>
    </div>
    @endsection
