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
                
                @foreach ($discussList as $discus)
                <li class="item">
                  <div class="card">
                    <div class="card-body">
                      <div class="product-img">
                        <img src="{{asset('/dist/img/user.jpg')}}" alt="Product Image">
                      </div>
                      <div class="product-info">
                        <a href="#" class="product-title">{{ $discus->discuss_title }}
                          
                          @if ($discus->discuss_status=='1')
                            <span class="badge badge-pill badge-success float-right">
                              Solved
                            </span>
                          @else
                            <span class="badge badge-pill badge-danger float-right">
                              Unsolved
                            </span>
                          @endif
                        </a>
                        <span class="product-description">{{ $discus->discuss_content  }}</span>
                      </div>
                    </div>

                  </div>
                </li>
                @endforeach
                
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








