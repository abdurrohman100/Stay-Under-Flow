@extends('dashboards.layout')

@section('title', "Dashboard")

@section('stylesheets')
@endsection

@section('content')
<section class="content">
    <div class="row">
      <div class="col-md-12">
        @php
            
            // dd($discussion);
        @endphp
        <div class="card card-widget">
          <div class="card-header">
            <div class="user-block">
              <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Image">
              <span class="username"><a href="#">{{ $discussion->discuss_title }}</a></span>
              <span class="description">Shared publicly - {{$discussion->created_at}}</span>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <!-- post text -->
            <p>{{$discussion->discuss_content}}</p>


            <!-- Attachment -->
            {{-- <div class="attachment-block clearfix">
              <img class="attachment-img" src="../dist/img/photo1.png" alt="Attachment Image">

              <div class="attachment-pushed">
                <h4 class="attachment-heading"><a href="http://www.lipsum.com/">Lorem ipsum text generator</a></h4>

                <div class="attachment-text">
                  Description about the attachment can be placed here.
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href="#">more</a>
                </div>
                <!-- /.attachment-text -->
              </div>
              <!-- /.attachment-pushed -->
            </div> --}}
            <!-- /.attachment-block -->

            <!-- Social sharing buttons -->
            <span class="float-right text-muted">{{ isset($answer)? $answer->count() : "0"}} comments</span>
          </div>
          <!-- /.card-body -->
          @if (isset($answer))
            @foreach ($answer as $answ)
            <div class="card-footer card-comments">
              <div class="card-comment">
                <!-- User image -->
                <img class="img-circle img-sm" src="../dist/img/user3-128x128.jpg" alt="User Image">
                <div class="comment-text">
                  <span class="username">
                    {{$answ->users->user_name}}
                    <span class="text-muted float-right">{{$answ->created_at}}</span>
                  </span><!-- /.username -->
                  {{$answ->answer_content}}
                </div>
                <!-- /.comment-text -->
              </div>
              <!-- /.card-comment -->
            </div>
                
            @endforeach
          @endif
          
          <!-- /.card-footer -->
          <div class="card-footer">
            <form action="{{ route('reply',$discussion->discuss_id) }}" method="post" id="loginForm">
              @csrf
              <img class="img-fluid img-circle img-sm" src="../dist/img/user4-128x128.jpg" alt="Alt Text">
              <div class="img-push">
                <input type="text" name="komentar" class="form-control form-control-sm" placeholder="Press enter to post comment">
              </div>
            </form>
          </div>
          <!-- /.card-footer -->
        </div>


      
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>

@endsection

@section('scripts')
    {{--  --}}

<script>
$('b#loginForm').keypress(function(e){
if (e.keyCode == 13)
{
    $('#loginForm').submit();
}
});
</script>
@endsection








