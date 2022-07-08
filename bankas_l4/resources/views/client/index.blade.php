@extends('main')

@section('index-content')

<div class="col-10 mx-auto">
    <a href="{{route('clients-create')}}">Add client</a>
    <div class="card mt-4">
        <div class="card-header">
            <h2>Clients List</h2>
        </div>
        <div class="card-body">
            <ul class="list-group">
                <div class="alert card-header thin-line" role="alert"></div>
                @foreach($clients as $client)
                <li class="list-group-item">
                    <div class="one-client">
                        <div>
                            <b>{{$client->name}} {{$client->surname}}</b><br>
                            {{$client->account_nr}}<br>
                            {{$client->social_id}}<br>
                        </div>
                        <div class="d-flex flex-column bd-highlight text-center mb-3">
                            <span class="font-weight-bold mt-3 mb-2">{{$client->funds}}€</span>
                            <button type="button" class="btn btn-outline-info p-1" onClick={funds}>
                                Funds
                            </button>
                        </div>
                        <div class="one-client-buttons">
                            <a class="btn btn-info mr-3" href="{{route('clients-edit', $client)}}" role="button">Edit</a>
                            <form action="{{route('clients-delete', $client)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-outline-secondary">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </li>
                @endforeach
                <div class="alert card-header thin-line mt-3" role="alert"></div>
            </ul>
        </div>
    </div>
    @endsection