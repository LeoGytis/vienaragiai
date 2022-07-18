@extends('main')

@section('title')
- create new client
@endsection

@section('content')

<div class="col-4 mx-auto">
    <div class="card mt-4">
        <div class="card-header card-color">
            <h2>Add new client</h2>
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="thin-line card-color mb-4"></div>
                <form action="{{route('clients-store')}}" method="post">
                    <label>Name:</label>
                    <input class="form-control mb-3" type="text" name="name_input">
                    <label>Surname:</label>
                    <input class="form-control mb-3" type="text" name="surname_input">
                    <label>Social ID:</label>
                    <input class="form-control mb-3" type="text" name="social_id_input">
                    <label>Color:</label>
                    <select name="color_id_input" class="ml-3" >
                        @foreach ($colors as $color) 
                            <option value="{{$color->id}}" style="background-color: {{$color->name}}">{{$color->name}}</option>
                        @endforeach
                    </select>
                    @csrf
                    <div class="thin-line card-color mt-4"></div>
                    <button class="btn btn-info card-header card-color mt-4" type="submit">Create</button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
