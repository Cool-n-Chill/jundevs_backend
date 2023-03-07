@extends('admin.layouts.main')

@section('title')
    Skill create
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add skill</h3>
                </div>
                <form action="{{ route('admin.skill.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="input-title">Skill title</label>
                            <input type="text" class="form-control" id="input-title" name="title" placeholder="Input here skill title">
                            @error('title')
                                <p class="text-danger">Title is required</p>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="submit" class="btn btn-primary" value="Create skill">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection