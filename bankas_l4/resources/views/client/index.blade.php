@extends('main')

@section('index-content')

<div class="col-8">
    <div class="card mt-4">
        <div class="card-header">
            <h2>Clients List</h2>
        </div>
        <div class="card-body">
            <ul class="list-group">
                <div class="alert alert-info text-center" role="alert">
                </div>
                @foreach($clients as $client)
                <li class="list-group-item">
                    <div class="one-client">
                        <div class="one-client__content">
                            <b>{{$client->name}} {{$client->surname}}</b><br>
                            {{$client->account_nr}}<br>
                            {{$client->social_id}}<br>
                            {{$client->funds}}€<br>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    @endsection
