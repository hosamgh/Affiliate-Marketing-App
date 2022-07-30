@extends('layout.auth')
@section('content')
<div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg">
<div class="auth-box on-sidebar">
    <div id="loginform">
        <div class="logo">
            <span class="db"><img src="{{asset('images/logo.png')}}" alt="logo" /></span>
            <h5 class="font-medium mb-3">Sign In to user</h5>
            @include('layout.partials.messages')

            @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
        </div>
        <!-- Form -->
        <div class="row">
            <div class="col-12">
           
        
                <form   method="post" action="{{ route('auth.login') }}" class="form-horizontal mt-3" id="loginform" >
                @csrf

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
                        </div>
                        <input type="text" class="form-control form-control-lg" name="username" placeholder="Email"
                            aria-label="email" aria-describedby="basic-addon1">
                        
                    </div>
                 
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon2"><i
                                    class="ti-lock"></i></span>
                        </div>
                        <input type="password" class="form-control form-control-lg" name="password" placeholder="Password"
                            aria-label="Password" aria-describedby="basic-addon1">

                          
                    </div>
                
                    <div class="form-group row">
                        <div class="col-md-12">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Remember me</label>
                              
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <div class="col-xs-12 pb-3">
                            <button class="btn btn-block btn-lg btn-info" type="submit">Log In</button>
                        </div>
                    </div>

                    <div class="form-group mb-0 mt-2">
                        <div class="col-sm-12 text-center">
                            Don't have an account? <a href="{{url('/register')}}"
                                class="text-info ml-1"><b>Sign Up</b></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
</div>
@endsection