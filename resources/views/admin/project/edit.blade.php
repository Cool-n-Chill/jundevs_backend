@extends('admin.layouts.main')

@section('title')
    Edit project {{ $project->title }}
@endsection

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit project</h3>
            </div>
            <form action="{{ route('admin.project.update', $project->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="card-body">
                    <div class="form-group">
                        <label for="input-title">New project title</label>
                        <input type="text" class="form-control" id="input-title" name="title" placeholder="Input here project title" value="{{ $project->title }}">
                        @error('title')
                            <p class="text-danger">Title is required</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="summernote">New project description</label>
                        <textarea id="summernote" name="description">{{$project->description}}</textarea>
                        @error('description')
                            <p class="text-danger">Description is required</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="input-git-repository-link">Project git repository link</label>
                        <input type="text" class="form-control" id="input-git-repository-link" name="git_repository_link" placeholder="Input here project git repo">
                    </div>
                    <div class="form-group">
                        <label for="skill-select">Select multiple skills</label>
                        <select class="form-control" id="skill-select" name="skill_ids[]" multiple="multiple">
                            @foreach ($skills as $skill)
                                <option
                                {{is_array($project->skills->pluck('id')->toArray()) && in_array($skill->id, $project->skills->pluck('id')->toArray()) ? 'selected': '' }}
                                value="{{ $skill->id }}">{{ $skill->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    <input type="submit" class="btn btn-primary" value="Update project">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection