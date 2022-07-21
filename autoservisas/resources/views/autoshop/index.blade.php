@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List of Autoshops</div>
                <div class="card-body">
                    @foreach ($autoshops as $autoshop)
                    {{$autoshop->name}}<br>
                    {{$autoshop->address}}<br>
                    {{$autoshop->phone_nr}}<br>
                    <a href="{{route('autoshop.edit',$autoshop)}}">EDIT</a><br>
                    <form method="POST" action="{{route('autoshop.destroy', $autoshop)}}">
                        @csrf
                        <button type="submit">DELETE</button>
                    </form>
                    -------------<br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
