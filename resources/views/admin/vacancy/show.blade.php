@extends('admin.layouts.main')

@section('title')
    Show vacancy {{ $vacancy->title }}
@endsection

@section('content')
<div class="row">
  <div class="col-12">
    <!-- Default box -->
<div class="card">
  <div class="card-header">
    <h2 class="card-title text-primary">{{ $vacancy->title }}</h2>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
        <div class="row">
          <div class="col-12">
            {!! $vacancy->description !!}
          </div>
        </div>
      </div>
      <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
        <div class="text-muted">
          <p class="text-md">Project
              <a href="{{ route('admin.project.show', $vacancy->project->id) }}" class="d-block">{{ $vacancy->project->title }}</a>
          </p>
          @if ($vacancy->language)
              <p class="text-md">Language
                  <a href="{{ route('admin.language.show', $vacancy->language->id) }}" class="d-block">{{ $vacancy->language->title }}</a>
              </p>
          @endif
          @if ($vacancy->skills)
              <p class="text-md">Skills:</p>
              @foreach ($vacancy->skills as $skill)
                  <p><a href="{{ route('admin.skill.show', $skill->id) }}" class="text-md">{{ $skill->title }}</a></p>
              @endforeach
          @endif
          
        </div>
        <div class="text-center mt-5 mb-3">
          <a href="{{ route('admin.vacancy.edit', $vacancy->id) }}" class="btn btn-primary mb-3"><i class="fas fa-pen"></i> Edit vacancy</a>
          <form action="{{ route('admin.vacancy.destroy', $vacancy->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Delete vacancy</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->
  </div>
</div>
@endsection