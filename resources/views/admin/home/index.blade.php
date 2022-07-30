@extends('layout.default')
@section('content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Dashboard</h4>
          
        </div>
  
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-sm-12">
                    <h5>Users</h5>
                           
                            <div class="table-responsive">
                                <table id="cc-table" class="table table-bordered m-b-20" data-page-length='10'>
                                    <thead>
                                        <tr class="bg-light">
                                            <th>#</th>
                                            <th>Name </th>
                                            <th>Email </th>
                                            <th>Registered Date </th>
                                            <th>Referred Users </th>
                                            <th>Total Income</th>
                                            <th>Total Expens</th>
                                            <th>Wallet Balance</th>
                                          
                                        </tr>
                                        
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                            <td>{{$loop->index}}</td>
                                 
                                      
                                            <td>{{$user->name}}</td>
                                       
                                        
                                            <td>{{$user->email}}</td>
                                      
                                        
                                            <td>{{$user->created_at}}</td>
                                      
                               
                                            <td>{{$user->referred_users_number}}</td>
                                      
                                      
                                            <td>{{$user->total_of_income}}</td>
                                     
                                   
                                            <td>{{$user->total_of_expenses}}</td>
                                            <td>{{$user->balance}}</td>
                                     
                                        </tr>
                                            
                                        @endforeach
                                    </tbody>
                                    <tbody>
                                       
                       
                                      
                                  
                        
                                       
                                  
                                    </tbody>
                           </table></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
</div>
@endsection