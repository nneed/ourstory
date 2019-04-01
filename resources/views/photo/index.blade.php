@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach ($photos as $photo)
            <p>This is photo {{ $photo->path}}</p>
        @endforeach
    </div>
@endsection


