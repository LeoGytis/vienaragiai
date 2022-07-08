@extends('main')

@section('create-content')

<div class="col-4 background-image">
    <div class="card mt-4">
        <div class="card-header">
            <h2>Add new client</h2>
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="alert alert-info text-center" role="alert"></div>
                <form action="{{route('clients-store')}}" method="post">
                    <label>Name:</label>
                    <input type="text" name="name">
                    <label>Surname:</label>
                    <input type="text" name="surname">
                    <label>Social ID:</label>
                    <input type="text" name="social_id">
                    @csrf
                    <button type="submit">Create</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
