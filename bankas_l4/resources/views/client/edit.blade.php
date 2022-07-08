@extends('main')

@section('edit-content')

<div class="col-4 mx-auto">
    <div class="card mt-4">
        <div class="card-header">
            <h2>Edit client</h2>
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="alert card-header thin-line" role="alert"></div>
                <form action="{{route('clients-update', $client)}}" method="post">
                    <label>Name:</label>
                    <input class="form-control mb-3" type="text" name="name_input" value="{{$client->name}}">
                    <label>Surname:</label>
                    <input class="form-control mb-3" type="text" name="surname_input" value="{{$client->surname}}">
                    <label>Social ID:</label>
                    <input class="form-control mb-3" type="text" name="social_id_input" value="{{$client->social_id}}">
                    @csrf
                    @method('put')
                    <div class="alert card-header thin-line mt-4" role="alert"></div>
                    <button class="col-3 btn btn-info card-header mt-4 mb-4" type="submit">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
