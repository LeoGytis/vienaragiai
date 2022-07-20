<form method="POST" action="{{route('autoshop.update',$autoshop)}}">
    Name: <input type="text" name="autoshop_name" value="{{$autoshop->name}}">
    Address: <input type="text" name="autoshop_address" value="{{$autoshop->address}}">
    Phone number: <input type="text" name="autoshop_phone_nr" value="{{$autoshop->phone_nr}}">
    @csrf
    <button type="submit">EDIT</button>
</form>
