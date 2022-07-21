@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create new autoshop</div>
                <div class="card-body">
                    <form method="POST" action="{{route('autoshop.store')}}">
                        Name: <input type="text" name="autoshop_name">
                        Address: <input type="text" name="autoshop_address">
                        Phone number: <input type="text" name="autoshop_phone_nr">
                        @csrf
                        <button type="submit">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
