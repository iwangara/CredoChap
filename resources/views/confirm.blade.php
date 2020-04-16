<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ __('CredoChap') }}</title>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('material') }}/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('material') }}/img/favicon.png">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{ asset('index') }}/css/index.css?v=2.1.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('material') }}/demo/demo.css" rel="stylesheet" />
</head>
<body class="profile-page sidebar-collapse">
<nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
        <div class="navbar-translate">
            <a style="color: purple; font-weight: bold;" class="navbar-brand" href="{{url('/')}}">
                {{ __('CredoChap') }} </a>
            <button style="color: purple;" class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span  class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a style="color: purple;" href="tel:+254-732-992-982" class="nav-link">
                        <i class="material-icons">call</i> +254 732 992 982

                    </a>
                </li>


                <li class="nav-item">
                    <a style="color: purple;" class="nav-link" href="#howto">
                        <i class="material-icons">help</i> How to
                    </a>
                </li>
                <li class="nav-item">
                    <a style="color: purple;" class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Follow us on Twitter" rel="nofollow">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a style="color: purple;" class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Like us on Facebook" rel="nofollow">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>



<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('material') }}/img/confirm.svg');"></div>
<div class="main main-raised">
    <div class="profile-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ml-auto mr-auto">
                    <div class="profile">
                        <div class="avatar">
                            <img src="{{ asset('material') }}/img/confirmed.svg" alt="Circle Image" class="img-raised rounded-circle img-fluid">
                        </div>
                        <div class="name">
                            <h3 class="title">Confirm transaction details</h3>
                            <h6>Hey,<br>You have requested to buy airtime worth: <span style="color: red;">1000 KES</span></h6>
                            <h6>The number to be topped up is: <span style="color: red;">732992982</span></h6>
                            <h6>The number to send Mpesa is: <span style="color: red;">729790289</span></h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="#buy"  class="btn btn-warning btn-raised btn-round">

                                        Yes,Proceed<i class="material-icons">play_arrow</i>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="#buy"  class="btn btn-outline-primary btn-raised btn-round">

                                        <i class="material-icons">fast_rewind</i>No,Make Changes
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer footer-default">
    <div class="container">
        <nav class="float-left">
            <ul>
                <li>
                    <a href="tel:+254-732-992-982">
                        Help Line: +254 732 992 982

                    </a>
                </li>

                <li>
                    <a href="mailto:someone@example.com">
                        Email: someone@example.com
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright float-left">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>
            <a href="https://www.mitchsofts.com/" target="_blank">Mitchsofts</a>
        </div>
    </div>
</footer>
<!--   Core JS Files   -->
<script src="{{ asset('material') }}/js/core/jquery.min.js"></script>
<script src="{{ asset('material') }}/js/core/popper.min.js"></script>
<script src="{{ asset('material') }}/js/core/bootstrap-material-design.min.js"></script>
<script src="{{ asset('material') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!-- Plugin for the momentJs  -->
<script src="{{ asset('material') }}/js/plugins/moment.min.js"></script>
<!--  Plugin for Sweet Alert -->
<script src="{{ asset('material') }}/js/plugins/sweetalert2.js"></script>
<!-- Forms Validations Plugin -->
<script src="{{ asset('material') }}/js/plugins/jquery.validate.min.js"></script>
<!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="{{ asset('material') }}/js/plugins/jquery.bootstrap-wizard.js"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="{{ asset('material') }}/js/plugins/bootstrap-selectpicker.js"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="{{ asset('material') }}/js/plugins/bootstrap-datetimepicker.min.js"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
<script src="{{ asset('material') }}/js/plugins/jquery.dataTables.min.js"></script>
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="{{ asset('material') }}/js/plugins/bootstrap-tagsinput.js"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{ asset('material') }}/js/plugins/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="{{ asset('material') }}/js/plugins/fullcalendar.min.js"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="{{ asset('material') }}/js/plugins/jquery-jvectormap.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{ asset('material') }}/js/plugins/nouislider.min.js"></script>
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
<!-- Library for adding dinamically elements -->
<script src="{{ asset('material') }}/js/plugins/arrive.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE'"></script>
<!-- Chartist JS -->
<script src="{{ asset('material') }}/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('material') }}/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('material') }}/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('material') }}/demo/demo.js"></script>
<script src="{{ asset('material') }}/js/settings.js"></script>
@stack('js')
</body>
</html>
