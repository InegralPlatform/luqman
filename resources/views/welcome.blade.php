<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>  لقمان</title>

        <!-- Fonts -->
    
        <link href="http://fonts.googleapis.com/earlyaccess/amiri.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            html, body ,a{
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
            img:hover
            {
                border: 2px solid #8e668d;
            }
            h3 ,p{
                font-family: ‘Amiri’, serif;
            }
            p:nth-of-type(2), span{
                font-size: 17px;
            }
            a
            {
                text-decoration: none;
                font-weight: 600;
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
                
                  
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a href="https://ar.wikipedia.org/wiki/%D8%A7%D9%84%D9%81%D8%A7%D8%B1%D8%A7%D8%A8%D9%8A" taraget="_blank"><img class="" src="{{('images/farabi.gif')}}" alt="First slide"></a>
                                 </div>
                                <div class="carousel-item">
                                <a href="" taraget="_blank"> <img class="https://www.google.com.eg/search?q=%D8%A7%D9%84%D8%B1%D8%A7%D8%B2%D9%89&oq=%D8%A7%D9%84%D8%B1%D8%A7%D8%B2%D9%89&aqs=chrome..69i57.4343j0j4&sourceid=chrome&ie=UTF-8" src="{{('images/razi.gif')}}" alt="Second slide"><a>
                                </div>
                                <div class="carousel-item">
                                <a href="https://ar.wikipedia.org/wiki/%D8%A7%D8%A8%D9%86_%D8%A7%D9%84%D9%87%D9%8A%D8%AB%D9%85" taraget="_blank">  <img class="" src="{{('images/03-ahazen_large.jpg')}}" alt="Third slide"></a>
                            </div>
                        </div>
                    </div>
                    <h3>لقمان</h3>
                        <p> أول منصة عربية حقيقية فى الوطن العربى للتعليم عن بعد</p>
                        <p>"نتعلم من  أجل ان نعيد امجاد الماضى  لاجل مستقبل مشرق"</p>
                        <span>ستنطلق  قريبا</span>
                </div>

               <div class="footer">
               <p> <?php  echo date("Y");?> &copy; جميع حقوق العمل محفوظة لشركة لقمان التابعة   <a href="http://iplatform.co" target="_blank"rget> للالمنصة المتكاملة</a> <br></p> 
                </div>
                
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
