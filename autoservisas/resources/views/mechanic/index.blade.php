@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">List of Mechanics</div>
                <div class="card-body">
                    @foreach ($mechanics as $mechanic)
                    <div class="list-info mb-3">
                        <div class="info d-flex justify-content-start">
                            @if($mechanic->photo)
                            <div class="image-box">
                                <img src="{{$mechanic->photo}}">
                            </div>
                            @endif
                            <div class="ms-3">
                                {{$mechanic->name}}<br>
                                {{$mechanic->surname}}<br>
                                {{-- {{$mechanic->photo}}<br> --}}
                                <b>Rating: </b>{{$mechanic->rating}}<br>
                                <a class="more-info-link" href="{{route('mechanic.show', $mechanic->id)}}" role="button">More info</a>
                            </div>
                        </div>
                        <div class="list-buttons">
                            <a class="btn btn-outline-success" href="{{route('mechanic.edit',[$mechanic])}}">EDIT</a>
                            <form method="POST" action="{{route('mechanic.destroy', [$mechanic])}}">
                                @csrf
                                <button class="btn btn-outline-secondary ms-3" type="submit">DELETE</button>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
