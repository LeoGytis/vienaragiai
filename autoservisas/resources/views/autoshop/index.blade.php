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
