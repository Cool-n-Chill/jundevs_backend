@extends('admin.layouts.main')

@section('title')
    Vacancy create
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add vacancy</h3>
                </div>
                <form action="{{ route('admin.vacancy.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="input-title">Vacancy title</label>
                            <input type="text" class="form-control" id="input-title" name="title" placeholder="Input here vacancy title">
                            @error('title')
                                <p class="text-danger">Title is required</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="summernote">Vacancy description</label>
                            <textarea id="summernote" name="description">{{ old('description') }}</textarea>
                            @error('description')
                                <p class="text-danger">Description is required</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="project-select">Select project</label>
                            <select class="form-control" id="project-select" name="project_id">
                                @foreach ($projects as $project)
                                    <option value="{{ $project->id }}" {{ $project->id == old('project_id') ? 'selected' : '' }}>
                                        {{ $project->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="language-select">Select language</label>
                            <select class="form-control" id="language-select" name="language_id">
                                @if (!old('language_id'))
                                <option selected disabled>Language is not choosed</option>
                                @endif
                                @foreach ($languages as $language)
                                    <option value="{{ $language->id }}" {{ $language->id == old('language_id') ? 'selected' : '' }}>
                                        {{ $language->title }}</option>
                                @endforeach
                            </select>
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
                        <input type="submit" class="btn btn-primary" value="Create vacancy">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection