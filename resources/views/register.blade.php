@extends('layout')

@section('title', "Register")

@section('stylesheets')

@endsection

@section('content')
<div class="job_details_area bg-its-2">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-lg-offset-3" style="height: 600px;">
                    <div class="apply_job_form white-bg mt-5">
						<h3 style="text-align:center" class="mb-30">Register</h3>
						<form method="POST" action="{{ route('store_users') }}">
                        @csrf
                            <div class="mt-10">
                                <input type="text" name="username" placeholder="Username"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" required class="single-input">
                            </div>
                            <div class="mt-10">
								<input type="email" name="email" placeholder="Email address"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required class="single-input">
							</div>
							<div class="mt-10">
								<input type="password" name="password" placeholder="Password" 
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required class="single-input">
                            </div>
                            <div class="mt-10">
								<input type="password" name="password" placeholder="Password Confirmation" 
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Retype Password'" required class="single-input">
							</div>
                            <input type="hidden" name="description" value="Give some description">
                            <div class="input-group-icon mt-10">
                                <div class="col-lg">
                                    <div class="text-center">
                                        
                                        <button type="submit" class="btn btn-block btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row mt-4">
                            <div class="col text-center">
                                Sudah punya akun? <a href="/login">Login disini!</a>
                            </div>
                        </div>
                        
					</div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    {{--  --}}
    <script type="application/javascript">
        $('#berkas').change(function(e2){
            var fileName2 = e2.target.files[0].name;
            // dd(fileName2);
            $('#idberkas').html(fileName2);
        });
    </script>
@endsection
