<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>AdminPanel</title>
    <!-- Icons -->
    <link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/simple-line-icons.css') }}" rel="stylesheet">
    <!-- Main styles for this application -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style type="text/css">
        .active_section{
            background-color: #0366d6;
        }
    </style>
</head>


<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
    <header class="app-header navbar">
        <button class="navbar-toggler aside-menu-toggler" type="button" style="margin-right: 0;"><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-lock"></i> Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form></button>
    </header>
    <div class="app-body">
        <div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                    <li class="nav-item nav-dropdown active_section" index="posts">
                        <a class="nav-link nav-dropdown-toggle"  href="#">Events & Activities</a>
                    </li>
                    <li class="nav-item nav-dropdown" index="announcements" >
                        <a class="nav-link nav-dropdown-toggle" href="#">Announcements</a>
                    </li>
                </ul>
            </nav>
        </div>
        <main class="main">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-menu d-md-down">
                    <a class="btn" id="add_new_post" href="#"><i class="fa fa-plus-square-o"></i> &nbsp;Add New</a>
                </li>
            </ol>
            @yield('content')
        </main>
    </div>

    <footer class="app-footer">
        <a href="http://coreui.io">CoreUI</a> © 2017 creativeLabs.
        <span class="float-right">Powered by <a href="http://coreui.io">CoreUI</a>
        </span>
    </footer>
    <!-- Bootstrap and necessary plugins -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.1/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
    <!-- Plugins and scripts required by all views -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
    <!-- GenesisUI main scripts -->
    <script src="js/app.js"></script>
    <script type="text/javascript">
    var current_showing = posts;
    $('#add_new_post').click(function() {
        console.log('#'+current_showing+'_form');
        $('.animated').hide();
        $('#'+current_showing+'_form').show();
    });

    $('.nav>li').click(function(){
        $(this).siblings().removeClass('active_section');
        $(this).addClass('active_section');
        if($('#'+$(this).attr('index')).css('display') == 'none'){
            $('#'+$(this).attr('index')).siblings().hide();
            $('#'+$(this).attr('index')).show();
            current_showing = $(this).attr('index');
            $('.breadcrumb-item').text($(this).text());
        }
    });  
    </script>
    @yield('script')
</body>

</html>