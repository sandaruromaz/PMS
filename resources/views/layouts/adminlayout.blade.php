<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
        <!--======================== CSS Files============================================================== -->
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/material-dashboard.css?v=2.1.2') }}">
        <link rel="stylesheet" href="{{ URL::asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
        <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
        <!--=============================JS Files===============================================================-->
        <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}" ></script>
        <script type="text/javascript" src="{{ URL::asset('js/star-rating.js') }}" ></script>
        <script type="text/javascript" src="{{ URL::asset('js/arrive.min.js') }}" ></script>
        <script type="text/javascript" src="{{ URL::asset('js/bootstrap-notify.js') }}" ></script>
        <script type="text/javascript" src="{{ URL::asset('js/bootstrap-tagsinput.js') }}" ></script>
        <script type="text/javascript" src="{{ URL::asset('js/chartist.min.js') }}" ></script>
        <script type="text/javascript" src="{{ URL::asset('js/jquery.bootstrap-wizard.js') }}" ></script>
        <script type="text/javascript" src="{{ URL::asset('js/jquery.dataTables.min.js') }}" ></script>
        <script type="text/javascript" src="{{ URL::asset('js/jquery.tagsinput.js') }}" ></script>
        <script type="text/javascript" src="{{ URL::asset('js/jquery.validate.min.js') }}" ></script>
        <script type="text/javascript" src="{{ URL::asset('js/jquery-jvectormap.js') }}" ></script>
        <script type="text/javascript" src="{{ URL::asset('js/moment.min.js') }}" ></script>
        <script type="text/javascript" src="{{ URL::asset('js/nouislider.min.js') }}" ></script>
        <script type="text/javascript" src="{{ URL::asset('js/perfect-scrollbar.jquery.min.js') }}" ></script>
        <script type="text/javascript" src="{{ URL::asset('js/sweetalert2.js') }}" ></script>
        <script type="text/javascript" src="{{ URL::asset('js/jasny-bootstrap.min.js') }}" ></script>
        <script type="text/javascript" src="{{ URL::asset('js/bootstrap-datetimepicker.min.js') }}" ></script>
        <script type="text/javascript" src="{{ URL::asset('js/popper.min.js') }}" ></script>
        <script type="text/javascript" src="{{ URL::asset('js/bootstrap-material-design.min.js') }}" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <!--========================================================================================================-->
</head>
<body>
    <div>
        <div>
            @include('Admin.sidebar')
        </div>
        <div>
            @include('General.header')
        </div>
        <div>
            @yield('content')
        </div>
    </div>
</body>
</html>