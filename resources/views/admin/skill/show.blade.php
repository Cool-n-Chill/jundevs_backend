@extends('admin.layouts.main')

@section('title')
    Show skill {{ $skill->title }}
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Skills info</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Skills title</th>
                    <th colspan="3">Action</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $skill->id }}</td>
                        <td>{{ $skill->title }}</td>
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
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
@endsection