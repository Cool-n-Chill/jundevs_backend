@extends('admin.layouts.main')

@section('title')
    Edit user {{ $user->name }} {{ $user->email }}
@endsection

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit user</h3>
            </div>
            <form action="{{ route('admin.user.update', $user->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="card-body">
                    <div class="form-group">
                        <label for="input-title">New user name</label>
                        <input type="text" class="form-control" id="input-name" name="name" placeholder="Input here user name" value="{{ $user->name }}">
                        @error('name')
                            <p class="text-danger">Name is required</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="summernote">New user description</label>
                        <textarea id="summernote" name="description">{{$user->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="summernote">New user contacts</label>
                        <input type="text" class="form-control" id="input-contacts" name="contacts" placeholder="Input here contacts">
                    </div>
                    <div class="form-group">
                        <label for="input-git-repository-link">User git repository link</label>
                        <input type="text" class="form-control" id="input-git-repository-link" name="git_repository_link" placeholder="Input here user git repo">
                    </div>
                    <div class="form-group">
                        <label for="skill-select">Select multiple skills</label>
                        <select class="form-control" id="skill-select" name="skills_ids[]" multiple="multiple">
                            @foreach ($skills as $skill)
                                <option
                                {{is_array($user->skills->pluck('id')->toArray()) && in_array($skill->id, $user->skills->pluck('id')->toArray()) ? 'selected': '' }}
                                value="{{ $skill->id }}">{{ $skill->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    <input type="submit" class="btn btn-primary" value="Update user">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection