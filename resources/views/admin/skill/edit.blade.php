@extends('admin.layouts.main')

@section('title')
    Edit skill {{ $skill->title }}
@endsection

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit skill</h3>
            </div>
            <form action="{{ route('admin.skill.update', $skill->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="card-body">
                    <div class="form-group">
                        <label for="input-title">New skill title</label>
                        <input type="text" class="form-control" id="input-title" name="title" placeholder="Input here skill title" value="{{ $skill->title }}">
                        @error('title')
                            <p class="text-danger">Title is required</p>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <input type="submit" class="btn btn-primary" value="Update skill">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection