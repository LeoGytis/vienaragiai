<div class="droppy dropright">
    <div class="btn btn-outline-info btn-sm dropdown-toggle ">
        Sort by:
    </div>
    <div class="drop-pop">
        <a class="btn btn-outline-info btn-sm" href="{{route('clients-index', ['sort' => 'name-asc'])}}" role="button">Name A-Z</a>
        <a class="btn btn-outline-info btn-sm" href="{{route('clients-index', ['sort' => 'name-desc'])}}" role="button">Name Z-A</a>
        <a class="btn btn-outline-info btn-sm" href="{{route('clients-index', ['sort' => 'surname-asc'])}}" role="button">Lastname A-Z</a>
        <a class="btn btn-outline-info btn-sm" href="{{route('clients-index', ['sort' => 'surname-desc'])}}" role="button">Lastname Z-A</a>
        <a class="btn btn-outline-info btn-sm" href="{{route('clients-index', ['sort' => 'funds-asc'])}}" role="button">Funds 0-99</a>
        <a class="btn btn-outline-info btn-sm" href="{{route('clients-index', ['sort' => 'funds-desc'])}}" role="button">Funds 99-0</a>
    </div>
</div>
