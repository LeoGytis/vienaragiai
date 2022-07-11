@extends('main')

@section('title')
- edit a client
@endsection

@section('content')

<div class="col-4 mx-auto">
    <div class="card mt-4">
        <div class="card-header">
            <h2>Edit client</h2>
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="thin-line mb-4" role="alert"></div>
                <form action="{{route('clients-update', $client)}}" method="post">
                    <label>Name:</label>
                    <input class="form-control mb-3" type="text" name="name_input" value="{{$client->name}}">
                    <label>Surname:</label>
                    <input class="form-control mb-3" type="text" name="surname_input" value="{{$client->surname}}">
                    <label>Social ID:</label>
                    <input class="form-control mb-3" type="text" name="social_id_input" value="{{$client->social_id}}">
                    @csrf
                    @method('put')
                    <div class="thin-line mt-4"></div>
                    <button class="col-4 btn btn-info card-header mt-4 mb-4" type="submit">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
