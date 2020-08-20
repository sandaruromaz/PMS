<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="../assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>
          Material Dashboard by Creative Tim
        </title>
        <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
        <!-- CSS Files -->
        <link rel="stylesheet" href="{{ URL::asset('css/material-dashboard.css?v=2.1.2') }}">
        
      </head>
      
</head>
    <body>
        <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end">
                <form class="navbar-form">
                <div class="input-group no-border">
                    <input type="text" value="" class="form-control" placeholder="Enter Customer NIC">
                    <button type="submit" class="btn btn-white btn-round btn-just-icon">
                    <i class="material-icons">search</i>
                    <div class="ripple-container"></div>
                    </button>
                </div>
                </form>
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="javascript:;">
                    <i class="material-icons">dashboard</i>
                    <p class="d-lg-none d-md-block">
                        Stats
                    </p>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons">notifications</i>
                    <span class="notification">5</span>
                    <p class="d-lg-none d-md-block">
                        Some Actions
                    </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Mike John responded to your email</a>
                    <a class="dropdown-item" href="#">You have 5 new tasks</a>
                    <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                    <a class="dropdown-item" href="#">Another Notification</a>
                    <a class="dropdown-item" href="#">Another One</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons">person</i>
                    <p class="d-lg-none d-md-block">
                        Account
                    </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                    <a class="dropdown-item" href="#">Profile</a>
                    <a class="dropdown-item" href="#">Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    </div>
                </li>
                </ul>
            </div>
            </div>
        </nav>
        </div>
            <script type="text/javascript" src="{{ URL::asset('js/bootstrap-datetimepicker.min.js') }}" ></script>
            <script type="text/javascript" src="{{ URL::asset('js/fullcalendar.min.js') }}" ></script>
            <script type="text/javascript" src="{{ URL::asset('js/arrive.min.js') }}" ></script>
            <script type="text/javascript" src="{{ URL::asset('js/bootstrap-notify.js') }}" ></script>
            <script type="text/javascript" src="{{ URL::asset('js/bootstrap-selectpicker.js') }}" ></script>
            <script type="text/javascript" src="{{ URL::asset('js/bootstrap-tagsinput.js') }}" ></script>
            <script type="text/javascript" src="{{ URL::asset('js/chartist.min.js') }}" ></script>
            <script type="text/javascript" src="{{ URL::asset('js/jasny-bootstrap.min.js') }}" ></script>
            <script type="text/javascript" src="{{ URL::asset('js/jquery.bootstrap-wizard.js') }}" ></script>
            <script type="text/javascript" src="{{ URL::asset('js/jquery.dataTables.min.js') }}" ></script>
            <script type="text/javascript" src="{{ URL::asset('js/jquery.tagsinput.js') }}" ></script>
            <script type="text/javascript" src="{{ URL::asset('js/jquery.validate.min.js') }}" ></script>
            <script type="text/javascript" src="{{ URL::asset('js/jquery-jvectormap.js') }}" ></script>
            <script type="text/javascript" src="{{ URL::asset('js/moment.min.js') }}" ></script>
            <script type="text/javascript" src="{{ URL::asset('js/nouislider.min.js') }}" ></script>
            <script type="text/javascript" src="{{ URL::asset('js/perfect-scrollbar.jquery.min.js') }}" ></script>
            <script type="text/javascript" src="{{ URL::asset('js/sweetalert2.js') }}" ></script>
            <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}" ></script>
            <script type="text/javascript" src="{{ URL::asset('js/popper.min.js') }}" ></script>
            <script type="text/javascript" src="{{ URL::asset('js/bootstrap-material-design.min.js') }}" ></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    </body>
</html>