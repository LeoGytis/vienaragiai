@extends('main')

@section('content')

@if($ro !== '')
<h1>Rezultatas: {{$ro}}</h1>
@endif

<form action="{{route('skaiciuokle')}}" method="POST">
    X: <input type="text" name="x">
    Y: <input type="text" name="y">
    @csrf
    <button type="submit">skirtumas</button>
</form>
<ul>
    @foreach ($colors as $color)
    <li>{{$color->id}}: {{$color->color}}</li>
    @endforeach
</ul>
@endsection

@section('title')
Bla bla bla here we go!
@endsection
