@extends('dashboards.layout')

@section('title', "Dashboard")

@section('stylesheets')
@endsection

@section('content')

<section class="content">
    <div class="row">
      <div class="col-md-12">
        <!-- DISCUSSION LIST -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">My Answer</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <ul class="products-list product-list-in-box">
              <li class="item">
                <div class="product-img">
                  <img src="{{asset('/dist/img/user.jpg')}}" alt="Product Image">
                </div>
                <div class="product-info">
                  <a href="{{ route('discussion') }}" class="product-title">What is mountain?
                    <span class="label label-success pull-right">Done</span>
                  </a>
                  <span class="product-description">
                        Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                  </span>
                </div>
              </li>
              <!-- /.item -->
              <li class="item">
                <div class="product-img">
                  <img src="{{asset('/dist/img/user.jpg')}}" alt="Product Image">
                </div>
                <div class="product-info">
                  <a href="#" class="product-title">Title
                    <span class="label label-danger pull-right">Not Yet</span>
                  </a>
                  <span class="product-description">
                        Description.
                  </span>
                </div>
              </li>
              <!-- /.item -->
              <li class="item">
                <div class="product-img">
                  <img src="{{asset('/dist/img/user.jpg')}}" alt="Product Image">
                </div>
                <div class="product-info">
                  <a href="#" class="product-title">Title
                    <span class="label label-danger pull-right">Not Yet</span>
                  </a>
                  <span class="product-description">
                        Description.
                  </span>
                </div>
              </li>
              <!-- /.item -->
              <li class="item">
                <div class="product-img">
                  <img src="{{asset('/dist/img/user.jpg')}}" alt="Product Image">
                </div>
                <div class="product-info">
                  <a href="#" class="product-title">Title
                    <span class="label label-danger pull-right">Not Yet</span>
                  </a>
                  <span class="product-description">
                        Description.
                  </span>
                </div>
              </li>
              <!-- /.item -->
            </ul>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>

@endsection

@section('scripts')
    {{--  --}}
@endsection








