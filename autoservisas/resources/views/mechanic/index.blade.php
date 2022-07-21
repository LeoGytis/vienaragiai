@foreach ($mechanics as $mechanic)
{{$mechanic->name}}<br>
{{$mechanic->surname}}<br>
{{$mechanic->photo}}<br>
{{$mechanic->rating}}<br>
{{$mechanic->mechanicAutoshop->name}}<br>
{{$mechanic->mechanicAutoshop->address}}<br>

<a href="{{route('mechanic.edit',[$mechanic])}}">EDIT</a>


<form method="POST" action="{{route('mechanic.destroy', [$mechanic])}}">
    @csrf
    <button type="submit">DELETE</button>
</form>
<br>
@endforeach
