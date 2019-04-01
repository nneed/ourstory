@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card mb-3">
                <div class="card-header">
                    Common
                </div>
                <div class="card-body pb-2">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title" class="col-form-label">Desc</label>
                                <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="desc" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="price" class="col-form-label">Photo</label>
                            <input id="price" type="file" name="file">
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection


