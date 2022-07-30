@extends('layout.default')
@section('content')
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Dashboard</h4>
                      
                    </div>
              
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
             
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Email campaign chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Pie Chart</h4>
                                <div>
                                    <canvas id="pie-chart" height="150"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-6">
                        @include('layout.partials.messages')

                        @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif
                        <div class="card card-hover">
                            <div class="card-body" style="background:url(../../assets/images/background/active-bg.png) no-repeat top center;">
                                <div class="p-t-20 text-center">
                                    <i class="mdi mdi-wallet display-4 text-orange d-block"></i>
                                    <span class="display-4 d-block font-medium">{{$data['balance']}}</span>
                                    <span>Current Balance</span>
                                    <!-- Progress -->
                                    <div class="progress m-t-40" style="height:4px;">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                      
                                    </div>
                                    <!-- Progress -->
                                    <!-- row -->
                                    <div class="row m-t-30 m-b-20">
                                        <!-- column -->
                                        <div class="col-4 border-right text-left">
                                            <h3 class="m-b-0 font-medium">{{$data['income']}}</h3>Income</div>
                                        <!-- column -->
                                        <div class="col-4 border-right">
                                            <h3 class="m-b-0 font-medium">{{$data['expenses']}}</h3>Expenses</div>
                                        <!-- column -->
                                        <div class="col-4 text-right">
                                            <h3 class="m-b-0 font-20">{{$data['last_transaction']}}</h3>Last transaction</div>
                                    </div>
                                    <a onclick="addTransaction()" href="javascript:void(0)" class="waves-effect waves-light m-t-20 btn btn-lg btn-info accent-4 m-b-20">Add transaction</a>
                                    <button onclick="addCategory()" type="button" class="waves-effect waves-light m-t-20 btn btn-lg btn-info accent-4 m-b-20"><i class="fa fa-plus"></i> Add category
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">User Registration Summary</h4>
                                    </div>
                                  
                                </div>
                                <div class="row">
                                    <!-- column -->
                                      <!-- column -->
                    <div class="col-lg-3">
                        <div class="card bg-cyan text-white  card-hover">
                            <div class="card-body">
                                <h4 class="card-title">No. Register users </h4>
                                <h3 class="white-text m-b-0"><i class="ti-arrow-up"></i> {{$data['usersCount']}}</h3>
                            </div>
                            <div class="m-t-20" id="views"></div>
                        </div>


                        <div class="card bg-info text-white  card-hover">
                            <div class="card-body">
                                <h4 class="card-title">No. Of Visitors</h4>
                                <div class="d-flex align-items-center m-t-30">
                                    <div class="" id="ravenue"></div>
                                    <div class="ml-auto">
                                        <h3 class="font-medium white-text m-b-0">{{$data['visitorsCount']}}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                 
                                    <!-- column -->
                                 
                                    <div class="col-lg-9">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h5>Invited Users</h5>
                                                       
                                                        <div class="table-responsive">
                                                            <table id="cc-table" class="table table-bordered m-b-20" data-page-length='10'>
                                                                <thead>
                                                                    <tr class="bg-light">
                                                                        <th>#</th>
                                                                        <th>Name </th>
                                                                        <th>Email </th>
                                                                        <th>Phone Number </th>
                                                                        <th>Created At </th>
                                                                      
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($data['invitedUsers'] as $user)
                                                                    <tr>
                                                                        <td>{{$loop->index+1}}</td>
                                                                        <td>{{$user->invitedUser->profile->name}}</td>
                                                                        <td>
                                                                          {{$user->invitedUser->email}}
                                                                        </td>
                                                                        <td>
                                                                            {{$user->invitedUser->profile->phone_number}}
                                                                        </td>
                                                                        <td>
                                                                           {{$user->invitedUser->created_at}}
                                                                        </td>
                                                                       

                                                                    </tr>
                                                                    @endforeach
                                                   
                                                                  
                                                              
                                                    
                                                                   
                                                              
                                                                </tbody>
                                                       </table></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                function addCategory(){
                    $.ajax({
                        url:"{{route('category.popup')}}",
                        success:function(response){
                            var title = response.title;
                            var body = response.body;
                            $("#modal .modal-title").text(title);
                            $("#modal .modal-body").html(body);
                            $("#modal").modal('toggle');
                        }
                    })
                }
                function addTransaction(){
                    $.ajax({
                        url:"{{route('transaction.popup')}}",
                        success:function(response){
                            var title = response.title;
                            var body = response.body;
                            $("#modal .modal-title").text(title);
                            $("#modal .modal-body").html(body);
                            $("#modal").modal('toggle');
                        }
                    })
                }
            </script>
@endsection