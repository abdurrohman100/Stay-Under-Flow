@extends('dashboards.layout')

@section('title', "User Profile")

@section('stylesheets')

@endsection
@section('content-header', "User Profile")
@section('content')

<div class="container-fluid">
    <div class="container mt-5">
        <div class="row">
            <div class="card col-md-12">
                <div class="card-header">
                    <h3 class="card-title">User Profile</h3>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            {{-- <div class="col-md-12"> --}}
                                <div class="col-md-3 menu">
                                    <div class="sidemenu text-center pt-2">
                                        <img src="{{asset('/dist/img/user.jpg')}}" alt="user" width="150px" class="img-fluid rounded-circle my-3 border border-warning shadow">
                                        <ul class="list-group">
                                            <li class="list-group-item btn-outline-secondary">Question : <strong>{{$discussCount}}</strong></li>
                                            <li class="list-group-item btn-outline-secondary">Answer : <strong>9</strong></li>
                                          </ul>
                                    </div>
                                </div>
                                <div class="col-md-9 content p-2">
                                <p class="mt-5 h3 font-weight-bold text-warning"><a href="" class="text-decoration-none"> {{Session::get('name')}}</a></p>
                                    <h5 class="my-3">Description :</h5>
                                    <p class="bg-light p-3 rounded">{{Session::get('desc')}}</p>
                                </div>
    
                            {{-- </div> --}}
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- endprofile -->
    
    <!-- Question -->
    <div class="container">
        <div class="card border-warning">
            <div class="card-header">
                <div class="py-2 text-dark sticky-top rounded bg-warning" >
                    <div class="container text-center">
                        <h4>Question List</h4>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @foreach ($discussList as $item)
                    <div class="card border-info">
                        <div class="card-header">
                            @if ($item->discuss_status=='1')
                            <span class="badge badge-pill badge-success float-right">
                              Solved
                            </span>
                            @else
                                <span class="badge badge-pill badge-danger float-right">
                                Unsolved
                                </span>
                            @endif
                            <div class="user-block">
                                <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Image">
                                <span class="username">
                                    <a href="#">{{$item->discuss_title}}</a>
                                </span>
                                <span class="description"><a href="#">{{$item->topics->topic_name}}</a></span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="col-md-12"> 
                                <p>{{ $item->discuss_content }}</p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <span>Last Update: {{$item->updated_at}}</span>
                        </div>
                    </div>
                @endforeach

                {{-- Question List --}}

            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    {{--  --}}
@endsection








