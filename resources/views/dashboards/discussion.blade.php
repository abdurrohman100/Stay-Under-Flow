@extends('dashboards.layout')

@section('title', "Discussion")

@section('stylesheets')
@endsection

@section('content')
<section class="content ">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card card-widget">
          <div class="card-header">
            @if (Session::get('id')== $discussion->discuss_user_id)
            <a href="" data-toggle="modal" id="editdisc{{ $discussion->discuss_id }}" data-idstd="{{ $discussion->discuss_id }}" data-target="#modal-edit-{{ $discussion->discuss_id }}">
              <span class="text-muted float-right">edit
                <i class="fa fa-edit" aria-hidden="true"></i>
              </span>
            </a>
            <a href="{{route('myquestion-delete',$discussion->discuss_id)}}" onclick="return confirm('Are you sure you want to delete this item?');" class="text-muted float-right">
                <span> Delete
                  <i class="fa fa-trash" aria-hidden="true"></i>
                </span>
            </a>
            @endif
            
            {{-- Modal --}}
            <div class="modal fade" id="modal-edit-{{ $discussion->discuss_id }}">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                  <h4 class="modal-title">Edit Discussion {{ $discussion->discuss_title }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  <form id="contact_form" action="{{route('myquestion-edit',$discussion->discuss_id)}}" method="POST" enctype = "multipart/form-data">
                      {{ csrf_field() }}
                      {{ method_field('put') }}
                      <div class="form-group">
                        <label>Judul Forum</label>
                        <input type="text" name="judul" class="form-control" value="{{$discussion->discuss_title}}" id="idInputJudul" placeholder="Judul Forum">
                      </div>
                      <div class="form-group">
                          <label for="inputKategori">Topics</label>
                          <select name="topic" class="form-control" id="inputKategori">
                              @php
                                  $listTopics=App\Topics::all();
                              @endphp
                              
                              @foreach ($listTopics as $item)
                                <option value="{{ $item->topic_id }}" {{  strcmp($item->topic_id,$discussion->topics->topic_id)==0 ? "selected" : "" }}>{{ $item->topic_name}}</option>
                              @endforeach
                          </select>
                      </div>
                      <div class="form-group">
                        <label for="inputKategori">Status</label>
                        <select name="status"  class="form-control" id="inputKategori">
                            
                          <option value="0" {{  strcmp("0",$discussion->discuss_status)==0 ? "selected" : "" }}>Unsolved</option>
                          <option value="1" {{  strcmp("1",$discussion->discuss_status)==0 ? "selected" : "" }}>Solved</option>
                            
                        </select>
                    </div>
                      
                      <div class="form-group">
                          <label for="inputPosition">Pertanyaan</label>
                          <textarea class="form-control" name="pertanyaan" id="idPertanyaan" cols="30" rows="10">{{$discussion->discuss_content}}</textarea>
                          {{-- <input type="text" name="position" class="form-control" id="inputPosition" placeholder="Posisi Pekerjaan/jabatan"> --}}
                      </div>
                      <button type="submit" id="submitForm" class="btn btn-default">Save</button>
                  </form>
                  </div>
                  <div class="modal-footer justify-content-left">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>

            {{-- Modal --}}



            <div class="user-block">
              <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Image">
              <span class="username"><a href="/discussion/{{ $discussion->discuss_id }}">{{ $discussion->discuss_title }}</a></span>
              <span class="description">Shared publicly - {{$discussion->created_at->diffForHumans()}} by 
                <a href="user/{{$discussion->discuss_user_id}}">{{$discussion->users->user_name}}</a>
              </span>
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
            <span class="float-right text-muted">{{ isset($answer)? $answer->count() : "0"}} comments</span>
          </div>
          <!-- /.card-body -->
          @if (isset($answer))
            @foreach ($answer as $answ)
            <div class="card-footer card-comments">
              @if (Session::get('id')== $answ->answer_user_id)
              <a href="" data-toggle="modal" id="editansw{{ $answ->answer_id }}" data-answ="{{ $answ->answer_id }}" data-target="#modal-edit-answ-{{ $answ->answer_id }}">
                <span class="text-muted float-right">edit
                  <i class="fa fa-edit" aria-hidden="true"></i>
                </span>
              </a>
              <a href="{{route('myanswer-delete',$answ->answer_id)}}" onclick="return confirm('Are you sure you want to delete this item?');" class="text-muted float-right">
                <span> Delete
                  <i class="fa fa-trash" aria-hidden="true"></i>
                </span>
              </a>
              @endif
              <div class="modal fade" id="modal-edit-answ-{{ $answ->answer_id }}">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                    <h4 class="modal-title">Edit Comments/Answer</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <form id="contact_form" action="{{route('discussion-answer-edit',$answ->answer_id)}}" method="POST" enctype = "multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('put') }}
                        <div class="form-group">
                            <label for="inputPosition">Comment</label>
                            <textarea class="form-control" name="comment" id="idPertanyaan" cols="30" rows="10">{{$answ->answer_content}}</textarea>
                            {{-- <input type="text" name="position" class="form-control" id="inputPosition" placeholder="Posisi Pekerjaan/jabatan"> --}}
                        </div>
                        <button type="submit" id="submitForm" class="btn btn-default">Save</button>
                    </form>
                    </div>
                    <div class="modal-footer justify-content-left">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
              <div class="card-comment">
                <!-- User image -->
                <img class="img-circle img-sm" src="../dist/img/user3-128x128.jpg" alt="User Image">
                <div class="comment-text">
                  <span class="username">
                    {{$answ->users->user_name}}
                  </span><!-- /.username -->
                  {{$answ->answer_content}}
                </div>
                <span class="text-muted float-right">{{$answ->updated_at->diffForHumans()}}</span>
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








