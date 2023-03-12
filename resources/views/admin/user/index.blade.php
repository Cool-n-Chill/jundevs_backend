@extends('admin.layouts.main')

@section('title')
    Users
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Users list</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>User name</th>
                    <th>User email</th>
                    <th colspan="3">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($users as $user)
                    <tr>
                      <td>{{ $user->id }}</td>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->email }}</td>
                      <td>
                        <a class="btn btn-default" type="button" href="{{ route('admin.user.show', $user->id) }}"><i class="far fa-eye"></i></a>
                      </td>
                      <td>
                        <a class="btn btn-primary" type="button" href="{{ route('admin.user.edit', $user->id) }}"><i class="fas fa-pen"></i></a>
                      </td>
                      <td>
                        <form action="{{ route('admin.user.destroy', $user->id) }}" method="POST">
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