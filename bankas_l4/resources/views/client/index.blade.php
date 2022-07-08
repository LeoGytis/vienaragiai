@extends('main')

@section('index-content')

<div class="col-8">
    <a href="{{route('clients-create')}}">Add client</a>
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
                        <div class="one-client__buttons">
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
            </ul>
        </div>
    </div>
    @endsection
