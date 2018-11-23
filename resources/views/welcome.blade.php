<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>  لقمان</title>

        <!-- Fonts -->
    
        <link href="http://fonts.googleapis.com/earlyaccess/amiri.css" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
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
                font-size: 28px;
            }
     
            .m-b-md {
                margin-bottom: 30px;
            }
            img{
                width: 100px;
                height: 100px;
                border-radius: 50%;
                border: 1px solid #b3abab;
                padding: 4px;
            }
            h3 ,p{
                font-family: ‘Amiri’, serif;
            }
            p:nth-of-type(2), span{
                font-size: 17px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <img src="{{('images/farabi.gif')}}">
                      <h3>لقمان</h3>
                        <p> أول منصة عربية حقيقية فى الوطن العربى لتعليم عن بعد</p>
                        <p>"نتعلم من  أجل ان نعيد امجاد الماضى  لاجل مستقبل مشرق"</p>
                     <span>ستنطلق  قريبا</span>
                </div>

               <div class="footer">
               <p> <?php  echo date("Y");?> <a href="https://iplatform.co"> المنصة المتكاملة</a> جميع حقوق العمل محفوظة لشركة لقمان التابعة   &copy; <br></p> 
                </div>
                
            </div>
        </div>
    </body>
</html>
