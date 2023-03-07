@extends('admin.layouts.main')

@section('title')
    Language create
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add language</h3>
                </div>
                <form action="{{ route('admin.language.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="input-title">Category title</label>
                            <input type="text" class="form-control" id="input-title" name="title" placeholder="Input here language title">
                            @error('title')
                                <p class="text-danger">Title is required</p>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="submit" class="btn btn-primary" value="Create language">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection