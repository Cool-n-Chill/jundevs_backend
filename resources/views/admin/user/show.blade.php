@extends('admin.layouts.main')

@section('title')
    Show user {{ $user->email }}
@endsection

@section('content')
<div class="row">
  <div class="col-12">
    <!-- Default box -->
<div class="card">
  <div class="card-header">
    <h2 class="card-title text-primary">{{ $user->name }} {{ $user->email }}</h2>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
        <div class="row">
          <div class="col-12">
            {!! $user->description !!}
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            {!! $user->contacts !!}
          </div>
        </div>
      </div>
      <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
        <div class="text-muted">
          @if ($user->git_profile_link)
              <p class="text-md">Git profile link
                  <a href="{{ $user->git_profile_link }}" class="d-block">{{ $user->git_profile_link }}</a>
              </p>
          @endif
        </div>
        <div class="text-muted">
          @if ($user->project)
              <p class="text-md">Project
                <a href="{{ route('admin.project.show', $suser->project->id) }}" class="d-block">{{ $user->project->title }}</a>
              </p>
          @endif
        </div>
        <div class="text-muted">
          @if ($user->skills->all())
              <p class="text-md">Skills
                @foreach ($user->skills as $skill)
                  <a href="{{ route('admin.skill.show', $skill->id) }}" class="d-block">{{ $skill->title }}</a> 
                @endforeach
              </p>
          @endif
        </div>
        <div class="text-center mt-5 mb-3">
          <a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-primary mb-3"><i class="fas fa-pen"></i> Edit user</a>
          <form action="{{ route('admin.user.destroy', $user->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Delete user</button>
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