@foreach ($photos as $user)
    <p>This is photo {{ $user->path}}</p>
@endforeach