<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
  
          Tip 2: you can also add an image using data-image tag
      -->
        <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
            Binara Pawning Center
          </a></div>
          <div class="invisible">
            @if ($activetab=="Dashboard")
                {{$dashboard='active'}}
            @else
                {{$dashboard='nav-item'}}
            @endif
            @if ($activetab=="usercontrol")
                {{$usercontrol='active'}};
            @else
                {{$usercontrol='nav-item'}};
            @endif
            @if ($activetab=="customer")
                {{$customer='active'}};
            @else
                {{$customer='nav-item'}};
            @endif
            @if ($activetab=="createjob")
                {{$createjob='active'}};
            @else
                {{$createjob='nav-item'}};
            @endif
            @if ($activetab=="articles")
                {{$articles='active'}};
            @else
                {{$articles='nav-item'}};
            @endif
            </div>
        <div class="sidebar-wrapper">
          <ul class="nav">
            <li class="{{$dashboard}}  ">
              <a class="nav-link" href="{{URL('/Admin/Dashboard')}}">
                <i class="fa fa-tachometer" aria-hidden="true"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="{{$customer}}">
              <a class="nav-link" href="{{URL('/Admin/customer')}}">
                <i class="fa fa-user" aria-hidden="true"></i>
                <p>Customers</p>
              </a>
            </li>
            <li class="{{$articles}} ">
              <a class="nav-link" href="{{URL('/Admin/articles')}}">
                <i class="fa fa-balance-scale" aria-hidden="true"></i>
                <p>Articles</p>
              </a>
            </li>
            <li class="{{$createjob}} ">
              <a class="nav-link" href="{{URL('/Admin/createjob')}}">
                <i class="fa fa-briefcase" aria-hidden="true"></i>
                <p>Create Jobs</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="./typography.html">
                <i class="fa fa-pie-chart" aria-hidden="true"></i>
                <p>Reports</p>
              </a>
            </li>
            <li class="{{$usercontrol}} ">
              <a class="nav-link" href="{{URL('/Admin/usercontrol')}}">
                <i class="fa fa-user-plus" aria-hidden="true"></i>
                <p>Control Users</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="./notifications.html">
                <i class="fa fa-bell" aria-hidden="true"></i>
                <p>Notifications</p>
              </a>
            </li>
          </ul>
        </div>
      </div>
</body>
</html>