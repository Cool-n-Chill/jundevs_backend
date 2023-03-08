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
                    <th>User login</th>
                    <th>User email</th>
                    <th colspan="3">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($users as $user)
                    <tr>
                      <td>{{ $user->id }}</td>
                      <td>{{ $user->title }}</td>
                      <td>{{ $user->email }}</td>
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