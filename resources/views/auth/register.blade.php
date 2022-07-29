@extends('layout.auth')
@section('content')
<div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg">
    <div class="auth-box on-sidebar">
        <div>
            <div class="logo">
                <span class="db"><img src="{{asset('images/logo.png')}}" alt="logo" /></span>
                <h5 class="font-medium mb-3">Create new account</h5>
            </div>
            <!-- Form -->
            <div class="row">
                <div class="col-12">
                    <form class="form-horizontal mt-3" method="POST" action="{{route('auth.register')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row ">
                            <div class="col-12 ">
                               
                                <input class="form-control form-control-lg" value="{{old('name')}}" type="text" name="name"  placeholder="Name">
                            @error('name')
                            <p class='error'>{{$message}}</p>
                                
                            @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12 ">
                                <input class="form-control form-control-lg" type="text" value="{{old('email')}}" name="email"  placeholder="Email">
                                @error('email')
                                <p class='error'>{{$message}}</p>
                                    
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12 ">
                                <input class="form-control form-control-lg" type="text" value="{{old('phone_number')}}" name="phone_number"  placeholder="Phone number">
                                @error('phone_number')
                                <p class='error'>{{$message}}</p>
                                    
                                @enderror
                            </div>
                        </div>

                     
                        <div class="form-group row">
                            <div class="col-12 ">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-lg datepicker"  id="datepicker-autoclose" name="date_of_birth" placeholder="Birthdate">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="icon-calender"></i></span>
                            </div>
                         
                        </div>
                    </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-12 ">
                                <input class="form-control form-control-lg" type="password" name="password"  placeholder="Password">
                                @error('password')
                                <p class='error'>{{$message}}</p>
                                    
                                @enderror
                            </div>
                        </div>
                 

                        <div class="form-group row">
                            <div class="col-12 ">
                           
                                 
                                        <div class="input-group mb-3">
                                         
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input form-control form-control-lg" name="image" id="inputGroupFile01">
                                                <label class="custom-file-label" for="inputGroupFile01">Upload image</label>
                                            </div>
                                        
                                        </div>
                                        @error('image')
                                        <p class='error'>{{$message}}</p>
                                            
                                        @enderror
                                   
                                
                       </div></div>
                
                        <div class="form-group text-center ">
                            <div class="col-xs-12 pb-3 ">
                                <button class="btn btn-block btn-lg btn-info" type="submit">SIGN UP</button>
                            </div>
                        </div>
                        <div class="form-group mb-0 mt-2 ">
                            <div class="col-sm-12 text-center ">
                                Already have an account? <a href="{{url('/login')}}" class="text-info ml-1 "><b>Sign In</b></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function(){
        $(".datepicker").datepicker({
            dateFormat: 'dd-mm-yy'
        })

        $(".datepicker").datepicker('setDate', "{{ old('date_of_birth')}}");

    })
</script>

@endsection