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
                    <div class="col-lg-8 col-xl-6">
                        <div class="card card-hover">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Transaction History</h4>
                                        <h5 class="card-subtitle">Overview of Email Campaigns</h5>
                                    </div>
                                    <div class="ml-auto align-items-center">
                                        <div class="dl">
                                            <select class="custom-select">
                                                <option value="0" selected>Monthly</option>
                                                <option value="1">Daily</option>
                                                <option value="2">Weekly</option>
                                                <option value="3">Yearly</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- column -->
                                <div class="row m-t-40">
                                    <!-- column -->
                                    <div class="col-lg-6">
                                        <div id="visitor" style="height:290px; width:100%;" class="m-t-20"></div>
                                    </div>
                                    <!-- column -->
                                    <div class="col-lg-6">
                                        <h1 class="display-6 m-b-0 font-medium">45%</h1>
                                        <span>Open Ratio for Campaigns</span>
                                        <ul class="list-style-none">
                                            <li class="m-t-20"><i class="fas fa-circle m-r-5 text-cyan font-12"></i> Open Ratio <span class="float-right">45%</span></li>
                                            <li class="m-t-20"><i class="fas fa-circle m-r-5 text-info font-12"></i> Clicked Ratio <span class="float-right">14%</span></li>
                                            <li class="m-t-20"><i class="fas fa-circle m-r-5 text-orange font-12"></i> Un-Open Ratio <span class="float-right">25%</span></li>
                                            <li class="m-t-20"><i class="fas fa-circle m-r-5 text-primary font-12"></i> Bounced Ratio <span class="float-right">17%</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- column -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-6">
                        <div class="card card-hover">
                            <div class="card-body" style="background:url(../../assets/images/background/active-bg.png) no-repeat top center;">
                                <div class="p-t-20 text-center">
                                    <i class="mdi mdi-wallet display-4 text-orange d-block"></i>
                                    <span class="display-4 d-block font-medium">0</span>
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
                                            <h3 class="m-b-0 font-medium">0</h3>Income</div>
                                        <!-- column -->
                                        <div class="col-4 border-right">
                                            <h3 class="m-b-0 font-medium">0</h3>Expenses</div>
                                        <!-- column -->
                                        <div class="col-4 text-right">
                                            <h3 class="m-b-0 font-20">27-03-2022</h3>Last transaction</div>
                                    </div>
                                    <a href="javascript:void(0)" class="waves-effect waves-light m-t-20 btn btn-lg btn-info accent-4 m-b-20">Add transaction</a>
                                    <button type="button" class="waves-effect waves-light m-t-20 btn btn-lg btn-info accent-4 m-b-20"><i class="fa fa-plus"></i> Add category
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
                                <h3 class="white-text m-b-0"><i class="ti-arrow-up"></i> 6548</h3>
                            </div>
                            <div class="m-t-20" id="views"></div>
                        </div>


                        <div class="card bg-info text-white  card-hover">
                            <div class="card-body">
                                <h4 class="card-title">Revenue Statistics</h4>
                                <div class="d-flex align-items-center m-t-30">
                                    <div class="" id="ravenue"></div>
                                    <div class="ml-auto">
                                        <h3 class="font-medium white-text m-b-0">$351</h3><span class="white-text op-5">Jan 10  - Jan  20</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                 
                                    <!-- column -->
                                    <div class="col-lg-9">
                                        <div class="row">
                                            <div class="col-sm-12">
                                               
                                                       
                                                        <div class="table-responsive">
                                                            <table id="cc-table" class="table table-bordered m-b-20" data-page-length='10'>
                                                                <thead>
                                                                    <tr class="bg-light">
                                                                        <th>#</th>
                                                                        <th>Currency </th>
                                                                        <th>Price </th>
                                                                        <th>Market Cap </th>
                                                                        <th>Volume 1D </th>
                                                                        <th>Change % (1D)</th>
                                                                        <th>Change % (1W)</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td><span><a href="JavaScript: void(0);"><i class=" display-7 cc XRP" title="XRP"></i></a></span></td>
                                                                        <td>
                                                                            <h6><a class="font-medium link" href="JavaScript: void(0);"> Ripple</a></h6>
                                                                            <small class="text-muted">XRP</small>
                                                                        </td>
                                                                        <td>
                                                                            <p>$1.67</p>
                                                                        </td>
                                                                        <td>
                                                                            <p>$61,191,183,730</p>
                                                                        </td>
                                                                        <td>
                                                                            <p>$10,133,400,000</p>
                                                                        </td>
                                                                        <td class="no-wrap"><span class="label label-success"><i class="fa fa-chevron-up"></i> 66.26%</span></td>
                                                                        <td class="no-wrap"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -16.48%</span></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><span><a href="JavaScript: void(0);"><i class=" display-7 cc ETH" title="ETH"></i></a></span></td>
                                                                        <td>
                                                                            <h6><a class="font-medium link" href="JavaScript: void(0);" > Ethereum</a></h6>
                                                                            <small class="text-muted">ETH</small>
                                                                        </td>
                                                                        <td>
                                                                            <p>$1,074.39</p>
                                                                        </td>
                                                                        <td>
                                                                            <p>$103,792,495,504</p>
                                                                        </td>
                                                                        <td>
                                                                            <p>$7,764,310,000</p>
                                                                        </td>
                                                                        <td class="no-wrap"><span class="label label-success"><i class="fa fa-chevron-up"></i> 26.18%</span></td>
                                                                        <td class="no-wrap"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -11.47%</span></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><span><a href="JavaScript: void(0);"><i class=" display-7 cc BTC" title="BTC"></i></a></span></td>
                                                                        <td>
                                                                            <h6><a class="font-medium link" href="JavaScript: void(0);"> Bitcoin</a></h6>
                                                                            <small class="text-muted">BTC</small>
                                                                        </td>
                                                                        <td>
                                                                            <p>$11,723.48</p>
                                                                        </td>
                                                                        <td>
                                                                            <p>$179,078,267,295</p>
                                                                        </td>
                                                                        <td>
                                                                            <p>$17,959,900,000</p>
                                                                        </td>
                                                                        <td class="no-wrap"><span class="label label-success"><i class="fa fa-chevron-up"></i> 17.66%</span></td>
                                                                        <td class="no-wrap"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -15.25%</span></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><span><a href="JavaScript: void(0);"><i class=" display-7 cc ADA" title="ADA"></i></a></span></td>
                                                                        <td>
                                                                            <h6><a class="font-medium link" href="JavaScript: void(0);"> Cardano</a></h6>
                                                                            <small class="text-muted">ADA</small>
                                                                        </td>
                                                                        <td>
                                                                            <p>$0.70</p>
                                                                        </td>
                                                                        <td>
                                                                            <p>$17,633,890,043</p>
                                                                        </td>
                                                                        <td>
                                                                            <p>$1,677,430,000</p>
                                                                        </td>
                                                                        <td class="no-wrap"><span class="label label-success"><i class="fa fa-chevron-up"></i> 40.79%</span></td>
                                                                        <td class="no-wrap"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -5.81%</span></td>
                                                                    </tr>
                                                              
                                                    
                                                                   
                                                              
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
@endsection