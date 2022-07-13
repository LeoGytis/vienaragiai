@extends('main')

@section('title')
- transfer your money no the universe!
@endsection

@section('content')

<div class="col-6 mx-auto">
    <div class="card mt-4">
        <div class="card-header card-color">
            <h2>Transfer your money</h2>
        </div>
        <div class="card-body">
            <div class="thin-line card-color text-center mb-3">
                @include('.parts.msg')
            </div>
            <ul class="list-group">
                <li class="list-group-item">
                    <div class="one-client">
                        <div>
                            <b>{{$client->name}} {{$client->surname}}</b><br>
                            {{$client->account_nr}}<br>
                        </div>
                        <div class="d-flex flex-column bd-highlight text-center mb-3">
                            <span class="font-weight-bold mt-3 mb-2">{{$client->funds}}€</span>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="thin-line card-color text-center mt-3"></div>
            <form  method="put">
                <label>Add or withdraw money:</label>
                <input class="form-control mb-3" type="text" name="addfunds_input">
                @csrf
                {{-- @method('put') --}}
                <button type="submit" name="action" value="add" class="col-4 btn btn-info card-header card-color mt-4 mb-4">Add</button>
                <button type="submit" name="action" value="withdraw" class="col-4 btn btn-info card-header card-color mt-4 mb-4">Withdraw</button>

            </form>




            {{-- <form action="{{route('clients-addfunds', $client)}}" method="post">
                <label>Add or withdraw money:</label>
                <input class="form-control mb-3" type="text" name="addfunds_input">
                @csrf
                @method('put')
                <button class="col-4 btn btn-info card-header card-color mt-4 mb-4" type="submit">Add</button>
            </form>
            <form action="{{route('clients-withdrawfunds', $client)}}" method="post">
                <label>Add or withdraw money:</label>
                <input class="form-control mb-3" type="text" name="withdrawfunds_input">
                @csrf
                @method('put')
                <button class="col-4 btn btn-info card-header card-color mt-4 mb-4" type="submit">Withdraw</button>
            </form> --}}
        </div>
    </div>
</div>
@endsection
