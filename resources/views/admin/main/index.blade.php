@extends('admin.layouts.main')

@section('title')
  Dashboard
@endsection

@section('content')
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3>10</h3>

          <p>Users</p>
        </div>
        <div class="icon">
          <i class="fas fa-users"></i>
        </div>
        <a href="{{--route('admin.user.index')--}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3>10</h3>

          <p>Posts</p>
        </div>
        <div class="icon">
          <i class="fas fa-sticky-note"></i>
        </div>
        <a href="{{--route('admin.post.index')--}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>10</h3>

          <p>Categories</p>
        </div>
        <div class="icon">
          <i class="fas fa-th-list"></i>
        </div>
        <a href="{{--route('admin.category.index')--}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-danger">
        <div class="inner">
          <h3>10</h3>

          <p>Tags</p>
        </div>
        <div class="icon">
          <i class="fas fa-tags"></i>
        </div>
        <a href="{{--route('admin.tag.index')--}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>
  <!-- /.row -->
@endsection