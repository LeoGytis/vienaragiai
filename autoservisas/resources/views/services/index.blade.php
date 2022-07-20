@foreach ($services as $service)
<a href="{{route('service.edit',[$service])}}">{{$service->name}}</a><br>
{{$service->time}}<br>
{{$service->price}}<br>
{{$service->serviceAutoshop->name}}<br>
{{$service->serviceAutoshop->address}}<br>

<form method="POST" action="{{route('service.destroy', [$service])}}">
    @csrf
    <button type="submit">DELETE</button>
</form>
<br>
@endforeach
