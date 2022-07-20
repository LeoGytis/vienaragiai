<form method="POST" action="{{route('autoshop.store')}}">
    Name: <input type="text" name="autoshop_name">
    Address: <input type="text" name="autoshop_address">
    Phone number: <input type="text" name="autoshop_phone_nr">
    @csrf
    <button type="submit">Create</button>
</form>
