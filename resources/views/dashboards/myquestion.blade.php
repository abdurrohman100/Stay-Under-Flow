@extends('dashboards.layout')

@section('title', "Dashboard")

@section('stylesheets')
@endsection
@section('content-header', "My Question")
@section('content')


  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
            <div class="card-header">
              <h3 class="title">My Question</h3>
            </div>
            <div class="card-body">
              <ul class="products-list product-list-in-box">
                
                <li class="item">
                  <div class="card">
                    <div class="card-body">
                      <div class="product-img">
                        <img src="{{asset('/dist/img/user.jpg')}}" alt="Product Image">
                      </div>
                      <div class="product-info">
                        <a href="{{ route('discussion') }}" class="product-title">What is mountain?
                          <span class="badge badge-pill badge-danger float-right">Unsolved</span>
                        </a>
                        <span class="product-description">
                              Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.abnfadasda
                              asdasdasdasdasda
                              adadaasd Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae harum, assumenda exercitationem 
                              aliquid nobis magnam architecto praesentium reprehenderit provident temporibus vel cumque explicabo ducimus 
                              unde voluptatum at totam incidunt voluptate!
                        </span>
                      </div>
                    </div>

                  </div>
                </li>
                <li class="item">
                  <div class="card">
                    <div class="card-body">
                      <div class="product-img">
                        <img src="{{asset('/dist/img/user.jpg')}}" alt="Product Image">
                      </div>
                      <div class="">
                        <a href="{{ route('discussion') }}" class="product-title">Mada Mada?
                          <span class="badge badge-pill badge-success float-right">Solved</span>
                        </a>
                        <span class="product-description">
                              Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.abnfadasda
                              asdasdasdasdasda
                              adadaasd Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae harum, assumenda exercitationem 
                              aliquid nobis magnam architecto praesentium reprehenderit provident temporibus vel cumque explicabo ducimus 
                              unde voluptatum at totam incidunt voluptate!
                        </span>
                      </div>
                    </div>

                  </div>
                </li>
                <!-- /.item -->
              </ul>
            </div>

        </div>
        <!-- DISCUSSION LIST -->
        <div class="box box-primary">
          
          <!-- /.box-header -->
          <div class="box-body">
            
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








