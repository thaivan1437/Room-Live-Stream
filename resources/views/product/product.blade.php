@extends('main')
@section("title")
  Product
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
      <strong>Trang san pham</strong>
    </h5>
    <!--Card content-->
    <div class="d-flex justify-between items-center">
      <div class="name">Name</div>
      <div class="price">Price</div>
      <div class="price_sale">Price Sale</div>
    </div>
    @foreach ($product as $key => $value)
    <div class="d-flex justify-between items-center">
        <div>{{ $value-> tensp }}</div>
        <div>{{ $value->gia }}</div>
        <div>{{ $value->giakm }}</div>
    </div>
    @endforeach
  </div>
@stop