<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Affiliate Marketing App</title>
    @include('layout.partials.head')
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper">
        @include('layout.partials.header')
        <div class="page-wrapper">
            @yield('content')
        </div>
    </div>

    <div class="modal" id="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
         
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/app.min.js')}}"></script>

<script src="{{asset('js/main.js')}}"></script>

<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
<!-- apps -->
<script src="{{asset('js/app.init.horizontal-fullwidth.js')}}"></script>
<script src="{{asset('js/app-style-switcher.horizontal')}}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{asset('assets/extra-libs/sparkline/sparkline.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('js/waves.js')}}"></script>
<!--Menu sidebar -->
{{-- <script src="../../dist/js/sidebarmenu.js"></script> --}}
<!--Custom JavaScript -->
<script src="{{asset('js/custom.min.js')}}"></script>
<!--This page JavaScript -->
<!--chartis chart-->
<script src="{{asset('js/chartist.min.js')}}"></script>
<script src="{{asset('assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
<!--c3 charts -->
<script src="{{asset('assets/extra-libs/c3/d3.min.js')}}"></script>
<script src="{{asset('assets/extra-libs/c3/c3.min.js')}}"></script>

<!--chartjs -->
<script src="{{asset('assets/libs/chart.js/dist/Chart.min.js')}}"></script>
<script src="{{asset('js/dashboard1.js')}}"></script>
<script src="{{asset('assets/extra-libs/DataTables/datatables.min.js')}}"></script>
<script src="{{asset('js/dashboard3.js')}}"></script>
<script src="{{asset('js/validator.js')}}"></script>
</body>

</html>
