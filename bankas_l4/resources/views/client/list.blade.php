@extends('main')

@section('content')



<div class="col-10 mx-auto">
    <div class="card mt-4">

        <div class="card-header">
            <h2>Clients List</h2>
        </div>
        <div class="card-body">
            <div class="thin-line text-center mb-3">
                @include('msg')
            </div>
            <div class="mb-3">
                Sort by:
                <a class="btn btn-outline-info mr-3" href="{{route('clients-index', ['sort' => 'name-asc'])}}" role="button">Name A-Z</a>
                <a class="btn btn-outline-info mr-3" href="{{route('clients-index', ['sort' => 'name-desc'])}}" role="button">Name Z-A</a>
                <a class="btn btn-outline-info mr-3" href="{{route('clients-index', ['sort' => 'surname'])}}" role="button">Lastname</a>
                <a class="btn btn-outline-info mr-3" href="{{route('clients-index', ['sort' => 'age'])}}" role="button">Age</a>
                <a class="btn btn-outline-info mr-3" href="{{route('clients-index', ['sort' => 'funds'])}}" role="button">Funds</a>
            </div>
            <ul class="list-group">

                @foreach($clients as $client)
                <li class="list-group-item list-group-item-action">
                    <div class="one-client">
                        <div>
                            <b>{{$client->name}} {{$client->surname}}</b><br>
                            {{$client->account_nr}}<br>
                            {{$client->social_id}}<br>
                            <a class="btn btn-outline-info mr-3" href="{{route('clients-show', $client->id)}}" role="button">More info</a>
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
                <div class="thin-line mt-3"></div>
            </ul>
        </div>
    </div>
    @endsection
