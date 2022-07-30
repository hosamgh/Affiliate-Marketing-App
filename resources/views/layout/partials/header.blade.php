<header class="topbar">
 @if(!Auth::guard('admin')->check())

    <input type="text" style="display:none;" value="{{ optional(auth()->user()->profile)->referral_link}}" id="referral-link"/>
@endif
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
           @if(Auth::guard('admin')->check())
            <a class="navbar-brand" href="{{route('admin.auth.logout')}}">
               Logout
            </a>
            @else 
            <a class="navbar-brand" href="{{route('auth.logout')}}">
                Logout
             </a>
             @endif
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-left mr-auto">
                <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                <!-- ============================================================== -->
                <!-- mega menu -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown mega-dropdown"><a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  
                    </a>
                    <div class="dropdown-menu animated bounceInDown">
                        <div class="mega-dropdown-menu row">
                            <div class="col-lg-3 col-xlg-2 m-b-30">
                                <h4 class="m-b-20">CAROUSEL</h4>
                                <!-- CAROUSEL -->
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <div class="container p-0"> <img class="d-block img-fluid" src="../../assets/images/big/img1.jpg" alt="First slide"></div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="container p-0"><img class="d-block img-fluid" src="../../assets/images/big/img2.jpg" alt="Second slide"></div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="container p-0"><img class="d-block img-fluid" src="../../assets/images/big/img3.jpg" alt="Third slide"></div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                                </div>
                                <!-- End CAROUSEL -->
                            </div>
                            <div class="col-lg-3 m-b-30">
                                <h4 class="m-b-20">ACCORDION</h4>
                                <!-- Accordian -->
                                <div id="accordion">
                                    <div class="card m-b-5">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                          Collapsible Group Item #1
                                        </button>
                                      </h5>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card m-b-5">
                                        <div class="card-header" id="headingTwo">
                                            <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                          Collapsible Group Item #2
                                        </button>
                                      </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card m-b-5">
                                        <div class="card-header" id="headingThree">
                                            <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                          Collapsible Group Item #3
                                        </button>
                                      </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3  m-b-30">
                                <h4 class="m-b-20">CONTACT US</h4>
                                <!-- Contact -->
                               
                            </div>
                      
                        </div>
                    </div>
                </li>
              
              
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-right">
                <!-- ============================================================== -->
                <!-- create new -->
                <!-- ============================================================== -->
                @if(!Auth::guard('admin')->check())
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="copy" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Copy Invitation Link<i class="mdi mdi-wallet display-4 text-orange"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right  animated bounceInDown" aria-labelledby="navbarDropdown2">
                     
                    </div>
                </li>
                @endif
               
           
            </ul>
        </div>
    </nav>
</header>

<script>
$(function(){
    $("#copy").click(function(){
        var ele =document.getElementById('referral-link')
        copyToClipboard(ele)
    })
})
</script>