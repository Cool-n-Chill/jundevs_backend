@extends('admin.layouts.main')

@section('title')
    Project create
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add project</h3>
                </div>
                <form action="{{ route('admin.project.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="input-title">Project title</label>
                            <input type="text" class="form-control" id="input-title" name="title" placeholder="Input here project title" value="{{old('title')}}">
                            @error('title')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="summernote">Project description</label>
                            <textarea id="summernote" name="description">{{ old('description') }}</textarea>
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
                                    {{ is_array(old('skill_ids')) && in_array($skill->id, old('skill_ids')) ? 'selected': '' }}
                                    value="{{ $skill->id }}">{{ $skill->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="submit" class="btn btn-primary" value="Create project">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection