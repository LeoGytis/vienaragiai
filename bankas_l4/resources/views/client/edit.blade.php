@extends('main')

@section('title')
- edit a client
@endsection

@section('content')

<div class="col-4 mx-auto">
    <div class="card mt-4">
        <div class="card-header card-color">
            <h2>Edit client</h2>
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="thin-line card-color mb-4"></div>
                <form action="{{route('clients-update', $client)}}" method="post">
                    <label>Name:</label>
                    <input class="form-control mb-3" type="text" name="name_input" value="{{$client->name}}">
                    <label>Surname:</label>
                    <input class="form-control mb-3" type="text" name="surname_input" value="{{$client->surname}}">
                    <label>Social ID:</label>
                    <input class="form-control mb-3" type="text" name="social_id_input" value="{{$client->social_id}}">
                    <label>Color:</label>
                    <select name="color_id_input" class="ml-3">
                        @foreach ($colors as $color)
                        <option value="{{$color->id}}" style="background-color: {{$color->name}}" @if($color->id ==
                            $client->color_id)selected @endif>{{$color->name}}</option>
                        @endforeach
                    </select>
                    @csrf
                    @method('put')
                    <div class="thin-line card-color mb-4"></div>
                    <div class="d-flex justify-content-center">
                        <button class="col-4 btn btn-info card-header card-color" type="submit">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
