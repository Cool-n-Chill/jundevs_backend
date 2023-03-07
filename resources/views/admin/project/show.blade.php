@extends('admin.layouts.main')

@section('title')
    Show project {{ $project->title }}
@endsection

@section('content')
<div class="row">
  <div class="col-12">
    <!-- Default box -->
<div class="card">
  <div class="card-header">
    <h2 class="card-title text-primary">{{ $project->title }}</h2>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
        <div class="row">
          <div class="col-12">
            {!! $project->description !!}
          </div>
        </div>
      </div>
      <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
        <div class="text-muted">
          @if ($project->skills->all())
              <p class="text-md">Tags
                @foreach ($project->skills as $skill)
                  <a href="{{ route('admin.skill.show', $skill->id) }}" class="d-block">{{ $skill->title }}</a> 
                @endforeach
              </p>
          @endif
          
        </div>
        <div class="text-center mt-5 mb-3">
          <a href="{{ route('admin.project.edit', $project->id) }}" class="btn btn-primary mb-3"><i class="fas fa-pen"></i> Edit project</a>
          <form action="{{ route('admin.project.destroy', $project->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Delete project</button>
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