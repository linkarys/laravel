@section('content')
    @foreach($users as $user)
        <p>{{ $user->name }}</p>
        <p>{{ $user->phone }}</p>
    @endforeach
@stop