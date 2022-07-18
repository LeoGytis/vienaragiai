@extends('main')

@section('content')

<div class="col-10 mx-auto">
    <div class="card mt-4">
        <div class="card-header card-color">
            <h2>Clients List</h2>
        </div>
        <div class="card-body">
            <div class="thin-line card-color text-center mb-3">
                @include('.parts.msg')
            </div>
            <div class="mb-3">
                @include('parts.sort')
            </div>
            <ul class="list-group">

                @foreach($clients as $client)
                <li class="list-group-item list-group-item-action"  style="background-color: {{$client->getColor->name}}">
                    <div class="one-client">
                        <div>
                            <b>{{$client->name}} {{$client->surname}}</b><br>
                            {{$client->account_nr}}<br>
                            
                            <a class="btn btn-link btn-sm pl-0" href="{{route('clients-show', $client->id)}}" role="button">More info</a>
                        </div>
                        <a class="btn btn-outline-info pr-4 pl-4 font-weight-bold" href="{{route('clients-funds', $client)}}">{{$client->funds}}€</a>
                        @if (Auth::user()->role > 9)
                        <div class="one-client-buttons">
                            <a class="btn btn-info mr-3" href="{{route('clients-edit', $client)}}">Edit</a>
                            <form action="{{route('clients-delete', $client)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-outline-secondary">
                                    Delete
                                </button>
                            </form>
                        </div>
                        @endif
                    </div>
                </li>
                @endforeach
                <div class="thin-line card-color mt-3"></div>
            </ul>
        </div>
    </div>
    @endsection
