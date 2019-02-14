@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach ($photos as $user)
            <p>This is photo {{ $user->path}}</p>
        @endforeach
    </div>
@endsection


