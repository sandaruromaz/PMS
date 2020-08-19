<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ URL::asset('css/material-dashboard.css?v=2.1.2') }}">
</head>
    <body>
        <div class="wrapper ">
            <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
                <!--
                Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
        
                Tip 2: you can also add an image using data-image tag
            -->
                <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
                    Binara Pawning Center
                </a></div>
                <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item active  ">
                    <a class="nav-link" href="./dashboard.html">
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                    </li>
                    <li class="nav-item ">
                    <a class="nav-link" href="./user.html">
                        <i class="material-icons">person</i>
                        <p>Customers</p>
                    </a>
                    </li>
                    <li class="nav-item ">
                    <a class="nav-link" href="./tables.html">
                        <i class="material-icons">work</i>
                        <p>Create Jobs</p>
                    </a>
                    </li>
                    <li class="nav-item ">
                    <a class="nav-link" href="./typography.html">
                        <i class="material-icons">multiline_chart</i>
                        <p>Reports</p>
                    </a>
                    </li>
                    <li class="nav-item ">
                    <a class="nav-link" href="./notifications.html">
                        <i class="material-icons">notifications</i>
                        <p>Notifications</p>
                    </a>
                    </li>
                </ul>
                </div>
            </div>
        </div>
    </body>
</html>