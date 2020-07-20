@extends('dashboards.layout')

@section('title', "Dashboard")

@section('stylesheets')

@endsection

@section('content')
<div class="container mt-5 p-3 pt-5">
    <div class="row">
        <div class="col-md-3 menu">
            <div class="sidemenu text-center pt-2">
                <img src="{{asset('/dist/img/user.jpg')}}" alt="user" width="150px" class="img-fluid rounded-circle my-3 border border-warning shadow">
                <ul class="list-group">
                    <li class="list-group-item btn-outline-secondary">Question : <strong>12</strong></li>
                    <li class="list-group-item btn-outline-secondary">Answer : <strong>9</strong></li>
                  </ul>
            </div>
        </div>
        <div class="col-md-7 content p-2">
            <p class="mt-5 h3 font-weight-bold text-warning"><a href="" class="text-decoration-none">John Doe (@john_doe123)</a></p>
            <h5 class="my-3">Description :</h5>
            <p class="bg-light p-3 rounded"><em>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad perspiciatis labore magni temporibus soluta. Atque itaque tempora repellendus rem quasi ipsam nesciunt perspiciatis. Velit dolores iusto magni voluptas repellat nulla. Nisi autem quos quis natus sed earum, consequuntur eos sit cupiditate saepe provident quibusdam facilis soluta iusto quasi optio commodi quaerat aperiam praesentium, unde dolorum? Et molestiae maxime quaerat consequuntur.</em></p>
        </div>
    </div>
</div>
<!-- endprofile -->

<!-- Question -->
<div class="question">
    <div class="py-2 text-dark sticky-top rounded bg-warning" >
        <div class="container text-center">
            <h4>Question List</h4>
        </div>
    </div>
    
    {{-- Questioon --}}
    <div class="col-md-12">
        <!-- Box Comment -->
        <div class="box box-widget">
            <div class="box-header with-border">
                <div class="user-block">
                <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Image">
                <span class="username"><a href="#">Akses CPP</a></span>
                <span class="description"><a href="#">Jonathan Burke Jr.</a></span>
                <span class="description"><a href="#">C+</a></span>
                </div>
            </div>
            <div class="box-body">
                <!-- post text -->
                <p>Far far away, behind the word mountains, far from the
                countries Vokalia and Consonantia, there live the blind
                texts. Separated they live in Bookmarksgrove right at
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                Deleniti voluptate quasi eveniet voluptates, adipisci, 
                molestiae voluptatum vitae repudiandae temporibus rerum 
                debitis ducimus maxime optio explicabo animi possimus dolor, 
                dicta aperiam?</p>
            </div>

            <div class="box-footer">
                    <span class="description">Last Update 7:30 PM Today</span>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    {{--  --}}
@endsection








