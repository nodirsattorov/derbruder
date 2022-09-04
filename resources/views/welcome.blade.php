<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@lang('panel.site_title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/bootstrap_my/my_style.css')}}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 60vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .backimage { 
			background-image: url(/consImages/RockinRoll.jpg) ;
			background-position: center center;
			background-repeat:  no-repeat;
			background-attachment: fixed;
			background-size:  cover;
			
        }
        .logoImage {
            width: 30%;  
            height: auto;
        }
    </style>
</head>
<body>
     {{-- wrapper flex-center position-ref  --}}
    <div class="backimage full-height">
        <div class="content full-height" style="background-color: rgba(0,0,0,0.8)">
            <div class="row" style="padding: 50px">
                <civ class="col">
                    <img class="logoImage" src="/consImages/logo.png" alt="logo">
                </civ>
                <div class="sl-nav">
                    <ul>
                        <li class="nav-link" style="padding-left: 0">
                            <i class="sl-flag flag-{{ App::getLocale('locale') }}"></i>
                            <div class="triangle"></div>
                            <ul>
                                <li><a href="language/uz"><i class="sl-flag flag-uz"><div id="uzbek"></div></i> <span class="active">Uz</span></a></li>
                                <li><a href="language/ru"><i class="sl-flag flag-ru"><div id="russian"></div></i> <span>Ru</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row" style="width: 80%; position: relative; left: 10%;">
                <div class="col">
                    <p style="color: #fff; font-weight: 700;  text-align: center;">
                        Haqiqiy yapon retseplariga asoslangan sushi va rollar
                    </p>
                </div>
            </div>
           
        </div>
        
    </div>
    
</body>
</html>

<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap_my/myScripts.js')}}" type="text/javascript"></script>
<script>
    $(window).on('load', function() {
        preloader();
    });
</script>

<script>
    $(window).on('load', function() {
        $(".loader-in").fadeOut();
        $(".loader").delay(150).fadeOut("fast");
        $(".wrapper").fadeIn("fast");
        $("#app").fadeIn("fast");
    });
</script>
