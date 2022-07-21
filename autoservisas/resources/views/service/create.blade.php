@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create new Service</div>
                <div class="card-body">
                    <form method="POST" action="{{route('service.store')}}">
                        Name: <input type="text" name="service_name">
                        Time: <input type="text" name="service_time">
                        Price: <input type="text" name="service_price">
                        <select name="mechanic_id">
                            @foreach ($mechanics as $mechanic)
                            <option value="{{$mechanic->id}}">{{$mechanic->name}} {{$mechanic->surname}}</option>
                            @endforeach
                        </select>

                        @csrf
                        <button type="submit">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
