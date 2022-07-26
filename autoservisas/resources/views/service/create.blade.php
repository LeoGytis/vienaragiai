@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">Create new Service</div>
                <div class="card-body">
                    <form method="POST" action="{{route('service.store')}}">
                        <div class="col-md-4 ms-3 mb-3">

                            Name: <input type="text" name="service_name">
                            Time: <input type="text" name="service_time">
                            Price: <input type="text" name="service_price">
                            <select class="mt-3" name="mechanic_id">
                                @foreach ($mechanics as $mechanic)
                                <option value="{{$mechanic->id}}">{{$mechanic->name}} {{$mechanic->surname}}</option>
                                @endforeach
                            </select>

                            @csrf
                            <button class="btn btn-outline-success mt-3" type="submit">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
