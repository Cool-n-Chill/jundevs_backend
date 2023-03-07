@extends('admin.layouts.main')

@section('title')
    Projects
@endsection

@section('content')
    <div class="row mb-4">
        <div class="col-sm-6 mt-3">
            <a href="{{ route('admin.project.create') }}" class="btn btn-block btn-primary primary">Add project</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Projects list</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Project title</th>
                    <th>Project git repo link</th>
                    <th colspan="3">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($projects as $project)
                    <tr>
                      <td>{{ $project->id }}</td>
                      <td>{{ $project->title }}</td>
                      <td>{{ $project->git_repository_link }}</td>
                      <td>
                        <a class="btn btn-default" type="button" href="{{ route('admin.project.show', $project->id) }}"><i class="far fa-eye"></i></a>
                      </td>
                      <td>
                        <a class="btn btn-primary" type="button" href="{{ route('admin.project.edit', $project->id) }}"><i class="fas fa-pen"></i></a>
                      </td>
                      <td>
                        <form action="{{ route('admin.project.destroy', $project->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
@endsection