@foreach ($services as $service)
{{$service->name}}<br>
{{$service->time}}<br>
{{$service->price}}<br>
{{$service->serviceAutoshop->name}}<br>
{{$service->serviceAutoshop->address}}<br>

<a href="{{route('service.edit',[$service])}}">EDIT</a>


<form method="POST" action="{{route('service.destroy', [$service])}}">
    @csrf
    <button type="submit">DELETE</button>
</form>
<br>
@endforeach
