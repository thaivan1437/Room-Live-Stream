@extends('main')
@section("title")
  đây là trang edit
@stop
@section('content')
  @foreach ($errors->all() as $error)
  <p class="alert alert-danger">{{ $error }}</p>
  @endforeach
  @if (session('status'))
  <div class="alert alert-success">
    {{ session('status')}}
  </div>
  @endif
  <!-- Material form login -->
  <div class="card">
    <h5 class="card-header info-color white-text text-center py-4">
      <strong>Trang them san pham</strong>
    </h5>
    <!--Card content-->
    <div class="card-body px-lg-5 pt-0 p-3">
      <!-- Form -->
      <form class="text-center p-3" style="color: #757575;" method="post" action="{{Asset('product/add')}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="md-form">
          <input type="text" id="tensp" name="tensp" class="form-control" placeholder="Name product">
        </div>
        <div class="md-form">
          <input type="text" id="mota" name="mota" class="form-control" placeholder="Des">
        </div>
        <div class="md-form">
          <input type="number" id="gia" name="gia" class="form-control" placeholder="Price">
        </div>
        <div class="md-form">
          <input type="number" id="giakm" name="giakm" class="form-control" placeholder="Price sale">
        </div>
        <!-- Sign in button -->
        <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Cập nhập</button>
      </form>
      <!-- Form -->
    </div>
  </div>
@stop