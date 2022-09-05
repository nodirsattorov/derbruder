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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('fonts/stylesheet.css')}}">

    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Gilroy';
            font-weight: 200;
            height: 100vh;
            margin: 0;
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

        .backimage{ 
			background-image: url(/consImages/RockinRoll.jpg) ;
			background-position: center center;
			background-repeat:  no-repeat;
			background-attachment: fixed;
			background-size:  cover;
			
        }
        .logoImage {
            width: 40%;  
            height: auto;
        }
        
        .header_banner-box{
            background: rgba(0,0,0,0.8) url(/consImages/RockinRoll.jpg) ;
			background-position: center center;
			background-repeat:  no-repeat;
			background-attachment: fixed;
			background-size:  cover;
            background-blend-mode: multiply;
        }
        
        .text-desc {
            font-size: 35px;
        }
        .header-social-num {
            width: 50%;
            margin: 0 auto;
        }
        
        .header-social-icon{
            width: 40%;
            margin: 0 auto;
        }
        
        .full-height-60{
            height: 60vh;
        }
        
        .content-box{
            padding: 0 30px;
        }
        
        .sl-flag{
            width: 30px;
            height: 30px;
        }
        
        .sl-flag-small {
            width: 20px;
            height: 20px;
        }
        
        .header-social-num h1{
            font-size: 30px;
            font-weight: 700;
            color: #000;
        }
        
        .header-social-num a{
            font-size: 21px;
            font-weight: 500;
            position: relative;
            color: #000;
        }
        
        .header-social-num a::after{
            content: '';
            display: block;
            width: 50%;
            height: 2px;
            margin: 0 auto;
            background: #000;
        }
        
        .header-social-icon{
            width: auto;
            padding-right: 20px;
            height: 60px;
            display: inline-block;
            float: left;
            color: #fff;
            overflow: hidden;
            background: #007bff !important;
            border-radius: 50px;
            cursor: pointer;
            box-shadow: 0px 10px 10px rgba(0,0,0,0.1);
        }
        
        
        .header-social-icon .btn-icon{
            /* display: inline-block; */
            height: 100%;
            width: 60px;
            text-align: center;
            border-radius: 50px;
            box-sizing: border-box;
            /* line-height: 60px; */
            background: #007bff !important;
            /* border: 1px solid #fff; */
        }
        .header-social-icon .btn-icon img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .header-social-icon span{
            font-size: 20px;
            font-weight: 700;
            line-height: 60px;
            margin-left: 10px;
            color: #fff;
        }
        
        .download-icon p{
            font-size: 24px;
            font-weight: 700;
            color: #000;
        }
        
        @media (max-width: 767px){
            .text-desc {
                font-size: 25px;
            }
            
            .logoImage {
                width: 65%;
            }
        }
        
        @media (max-width: 475px){
            .logoImage {
                width: 60%;
            }
            
            .text-desc{
                font-size: 25px;
            }
            
            .sl-nav li:hover ul{
                top: 34px;
            }
            
            .sl-nav li:hover .triangle{
                top: 20px;
            }
            
            .header-social-icon-box{
                padding: 0 40px;
            }
            
            .header-social-num {
                width: 100%;
            }
    
        }
        
        @media (max-width: 414px) {
            .logoImage {
                width: 80%;
            }
            
            .sl-flag {
                width: 25px;
                height: 25px;
            }
        }
        
        @media (max-width: 390px){
            .content-box {
                padding: 0 15px;
            }
            
            .header-social-icon span {
                font-size: 17px;
            }
        }
    </style>
</head>
<body>
    {{-- wrapper flex-center position-ref  --}}
    <header>
        <div class="header_banner">
            <div class="header_banner-box">
                <div class="container">
                    <div class="header_banner_top full-height-60">
                        <div class="h-100">
                            <div class="content h-100 pt-5">
                                <div class="content-box h-100 d-flex flex-column">
                                    <div class="row">
                                        <civ class="col pl-0 pr-0">
                                            <img class="logoImage" src="/consImages/logo.png" alt="logo">
                                        </civ>
                                        <div class="sl-nav">
                                            <ul>
                                                <li class="nav-link p-0" style="padding-left: 0">
                                                    <i class="sl-flag flag-{{ App::getLocale('locale') }}"></i>
                                                    <div class="triangle"></div>
                                                    <ul>
                                                        <li><a href="language/uz" class="d-flex align-items-center"><i class="sl-flag sl-flag-small flag-uz"><div id="uzbek"></div></i> <span class="active">Uz</span></a></li>
                                                        <li><a href="language/ru" class="d-flex align-items-center"><i class="sl-flag sl-flag-small flag-ru"><div id="russian"></div></i> <span>Ru</span></a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center mt-4">
                                        <div  class="m-auto">
                                            <p style="color: #fff; font-weight: 700;  text-align: center;" class="mb-0 text-desc">
                                                Haqiqiy yapon retseplariga asoslangan sushi va rollar
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-social_box">
            <div class="container">
                <div class="header-social-main py-5">
                    <div class="header-social-num text-center mb-5">
                        <h1 class="mb-0">Buyurtma berish</h1>
                        <a href="tel:+998770171919">+998(77)<b>017-19-19</b></a>
                    </div>
                    <div class="header-social-icon-box d-flex justify-content-center flex-column">
                        <a href="#!" class="header-social-icon mb-5">
                            <div class="d-flex">
                                <div class="btn-icon">
                                    <img src="images/telegram.png" alt="">
                                </div>
                                <span>Bot orqali buyurtma</span>
                            </div>
                        </a>
                        <a href="#" class="download-icon d-flex align-items-center justify-content-center">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-down-circle-fill" viewBox="0 0 16 16" id="IconChangeColor"> <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" id="mainIconPathAttribute" fill="#000000"></path> </svg>
                            </div>
                            <p class="mb-0 ml-3">Menyuni yuklab olish</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
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
