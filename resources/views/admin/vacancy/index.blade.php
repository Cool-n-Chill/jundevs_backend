@extends('admin.layouts.main')

@section('title')
    Vacancies
@endsection

@section('content')
    <div class="row mb-4">
        <div class="col-sm-6 mt-3">
            <a href="{{ route('admin.vacancy.create') }}" class="btn btn-block btn-primary primary">Add vacancy</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Vacancies list</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Vacancy title</th>
                    <th>Project</th>
                    <th>Language</th>
                    <th colspan="3">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($vacancies as $vacancy)
                    <tr>
                      <td>{{ $vacancy->id }}</td>
                      <td>{{ $vacancy->title }}</td>
                      <td>{{ $vacancy->project->title }}</td>
                      <td>{{ $vacancy->language ? $vacancy->language->title : '' }}</td>
                      <td>
                        <a class="btn btn-default" type="button" href="{{ route('admin.vacancy.show', $vacancy->id) }}"><i class="far fa-eye"></i></a>
                      </td>
                      <td>
                        <a class="btn btn-primary" type="button" href="{{ route('admin.vacancy.edit', $vacancy->id) }}"><i class="fas fa-pen"></i></a>
                      </td>
                      <td>
                        <form action="{{ route('admin.vacancy.destroy', $vacancy->id) }}" method="POST">
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