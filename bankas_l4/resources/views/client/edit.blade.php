@extends('main')

@section('edit-content')

<div className="col-4 background-image">
    <div className="card mt-4">
        <div className="card-header">
            <h2>Edit client</h2>
        </div>
        <div className="card-body">
            <div className="form-group">
                <div className="alert alert-info text-center" role="alert"></div>
                <form action="{{route('clients-update', $client)}}" method="post">
                    <label>Name:</label>
                    <input type="text" name="name_input" value="{{$client->name}}">
                    <label>Surname:</label>
                    <input type="text" name="surname_input" value="{{$client->surname}}">
                    <label>Social ID:</label>
                    <input type="text" name="social_id_input" value="{{$client->social_id}}">
                    @csrf
                    @method('put')
                    <button type="submit">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
