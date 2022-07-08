@extends('main')

@section('create-content')

<div class="col-4 mx-auto">
    <div class="card mt-4">
        <div class="card-header">
            <h2>Add new client</h2>
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="alert alert-info text-center" role="alert"></div>
                <form action="{{route('clients-store')}}" method="post">
                    <label>Name:</label>
                    <input class="form-control mb-3" type="text" name="name_input">
                    <label>Surname:</label>
                    <input class="form-control mb-3" type="text" name="surname_input">
                    <label>Social ID:</label>
                    <input class="form-control mb-3" type="text" name="social_id_input">
                    @csrf
                    <button class="btn btn-info mt-4" type="submit">Create</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
