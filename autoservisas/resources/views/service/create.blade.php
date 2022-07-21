<form method="POST" action="{{route('service.store')}}">
    Name: <input type="text" name="service_name">
    Time: <input type="text" name="service_time">
    Price: <input type="text" name="service_price">
    <select name="autoshop_id">
        @foreach ($autoshops as $autoshop)
        <option value="{{$autoshop->id}}">{{$autoshop->name}} {{$autoshop->address}}</option>
        @endforeach
    </select>

    @csrf
    <button type="submit">Create</button>
</form>
