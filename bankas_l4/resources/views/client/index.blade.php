@extends('main')

@section('content')
<ul>
    @forelse($clients as $client)
    <li>
        <div>{{$client->name}}
            <div>
                <div>{{$client->surname}}
                    <div>
    </li>
    @empty
    <li>No clients to see</li>
    @endforelse
</ul>
@endsection
