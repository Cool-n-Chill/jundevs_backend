@extends('admin.layouts.main')

@section('title')
    Skills
@endsection

@section('content')
    <div class="row mb-4">
        <div class="col-sm-6 mt-3">
            <a href="{{ route('admin.skill.create') }}" class="btn btn-block btn-primary primary">Add skill</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Skills list</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Skill title</th>
                    <th colspan="3">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($skills as $skill)
                    <tr>
                      <td>{{ $skill->id }}</td>
                      <td>{{ $skill->title }}</td>
                      <td>
                        <a class="btn btn-default" type="button" href="{{ route('admin.skill.show', $skill->id) }}"><i class="far fa-eye"></i></a>
                      </td>
                      <td>
                        <a class="btn btn-primary" type="button" href="{{ route('admin.skill.edit', $skill->id) }}"><i class="fas fa-pen"></i></a>
                      </td>
                      <td>
                        <form action="{{ route('admin.skill.destroy', $skill->id) }}" method="POST">
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