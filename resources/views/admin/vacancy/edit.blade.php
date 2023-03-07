@extends('admin.layouts.main')

@section('title')
    Edit vacancy {{ $vacancy->title }}
@endsection

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit vacancy</h3>
            </div>
            <form action="{{ route('admin.vacancy.update', $vacancy->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="card-body">
                    <div class="form-group">
                        <label for="input-title">New vacancy title</label>
                        <input type="text" class="form-control" id="input-title" name="title" placeholder="Input here vacancy title" value="{{ $vacancy->title }}">
                        @error('title')
                            <p class="text-danger">Title is required</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="summernote">Vacancy description</label>
                        <textarea id="summernote" name="description">{{ $vacancy->description }}</textarea>
                        @error('description')
                            <p class="text-danger">Description is required</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="project-select">Select project</label>
                        <select class="form-control" id="project-select" name="project_id">
                            @foreach ($projects as $project)
                                <option value="{{ $project->id }}" {{ $project->id == $vacancy->project->id ? 'selected' : '' }}>
                                    {{ $project->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="language-select">Select language</label>
                        <select class="form-control" id="language-select" name="language_id">
                            
                            @if ($vacancy->language)
                                @foreach ($languages as $language)
                                    <option value="{{ $language->id }}" {{ $language->id == $vacancy->language->id ? 'selected' : '' }}>
                                    {{ $language->title }}</option>
                                @endforeach
                            @else
                                <option selected disabled>Language is not choosed</option>
                                @foreach ($languages as $language)
                                    <option value="{{ $language->id }}">{{ $language->title }}</option>
                                @endforeach
                            @endif

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="skill-select">Select multiple skills</label>
                        <select class="form-control" id="skill-select" name="skill_ids[]" multiple="multiple">
                            @foreach ($skills as $skill)
                                <option
                                {{is_array($vacancy->skills->pluck('id')->toArray()) && in_array($skill->id, $vacancy->skills->pluck('id')->toArray()) ? 'selected': '' }}
                                value="{{ $skill->id }}">{{ $skill->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    <input type="submit" class="btn btn-primary" value="Update vacancy">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection