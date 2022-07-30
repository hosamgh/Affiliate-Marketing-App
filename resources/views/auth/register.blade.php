@extends('layout.auth')
@section('content')
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg">
        <div class="auth-box on-sidebar">
            <div>
                <div class="logo">
                    <span class="db"><img src="{{ asset('images/logo.png') }}" alt="logo" /></span>
                    <h5 class="font-medium mb-3">Create new account</h5>
                </div>
                <!-- Form -->
                <div class="row">
                    <div class="col-12">
                        <form autocomplete="off" class="form-horizontal mt-3" method="POST"
                            action="{{ route('auth.register') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row ">
                                <div class="col-12 ">

                                    <input class="form-control form-control-lg" autocomplete="off"
                                        value="{{ old('name') }}" type="text" name="name" placeholder="Name">
                                    @error('name')
                                        <p class='error'>{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12 ">
                                    <input class="form-control form-control-lg" autocomplete="off" type="text"
                                        value="{{ old('email') }}" name="email" placeholder="Email">
                                    @error('email')
                                        <p class='error'>{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12 ">
                                    <input class="form-control form-control-lg" autocomplete="off" type="text"
                                        value="{{ old('phone_number') }}" name="phone_number" placeholder="Phone number">
                                    @error('phone_number')
                                        <p class='error'>{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-12 ">
                                    <div class="input-group">
                                        <input type="text" class="form-control form-control-lg datepicker"
                                            autocomplete="off" id="datepicker-autoclose" name="date_of_birth"
                                            placeholder="Birthdate">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="icon-calender"></i></span>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-12 ">
                                    <input class="form-control form-control-lg" type="password" autocomplete="off"
                                        name="password" placeholder="Password">
                                    @error('password')
                                        <p class='error'>{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-12 ">
                                    <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                                        <input name="image" id="upload" type="file" onchange="readURL(this);"
                                            class="form-control border-0">
                                        <label id="upload-label" for="upload" class="font-weight-light text-muted">Profile
                                            image</label>
                                        <div class="input-group-append">
                                            <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i
                                                    class="fa fa-cloud-upload mr-2 text-muted"></i><small
                                                    class="text-uppercase font-weight-bold text-muted">Choose
                                                    file</small></label>
                                        </div>
                                    </div>


                                    @error('image')
                                        <p class='error'>{{ $message }}</p>
                                    @enderror


                                </div>
                            </div>

                            <div class="form-group text-center ">
                                <div class="col-xs-12 pb-3 ">
                                    <button class="btn btn-block btn-lg btn-info" type="submit">SIGN UP</button>
                                </div>
                            </div>
                            <div class="form-group mb-0 mt-2 ">
                                <div class="col-sm-12 text-center ">
                                    Already have an account? <a href="{{ url('/login') }}" class="text-info ml-1 "><b>Sign
                                            In</b></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function() {
            $(".datepicker").datepicker({
                dateFormat: 'dd-mm-yy',
                changeMonth: true,
                changeYear: true
            })

            $(".datepicker").datepicker('setDate', "{{ old('date_of_birth') }}");

        })

        var input = document.getElementById('upload');
        var infoArea = document.getElementById('upload-label');

        input.addEventListener('change', showFileName);

        function showFileName(event) {
            var input = event.srcElement;
            var fileName = input.files[0].name;
            infoArea.textContent = 'File name: ' + fileName;
        }
    </script>
@endsection
