<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>QLMC</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lora:wght@700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
              background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .page{
                width: 100%;
                height: 100%;
                display: flex;
                background-color: #BCA2FC;
                background: url("/image/background.jpg");
            }
            .resume{
                margin-top: 50px;
                margin: auto;
                width: 830px;
                height: 500px;
               /* background-color: red;*/
            }
            .title{
                font-size: 45px;
                font-family: 'Lora';
                text-align: center;
                margin-top: 10px;
            }
            /*----chu chay-----*/
            .marquee {
             height: 50px; 
             overflow: hidden;
             position: relative;
             margin-top: 50px;
            }
            .marquee p {
             position: absolute;
             width: 100%;
             height: 100%;
             margin: 0;
             line-height: 50px;
             text-align: center;
             /* Starting position */
             -moz-transform:translateX(100%);
             -webkit-transform:translateX(100%); 
             transform:translateX(100%);
             /* Apply animation to this element */ 
             -moz-animation: scroll-left 15s linear infinite;
             -webkit-animation: scroll-left 15s linear infinite;
             animation: scroll-left 15s linear infinite;
            }
            /* Move it (define the animation) */
            @-moz-keyframes scroll-left {
             0%   { -moz-transform: translateX(100%); }
             100% { -moz-transform: translateX(-100%); }
            }
            @-webkit-keyframes scroll-left {
             0%   { -webkit-transform: translateX(100%); }
             100% { -webkit-transform: translateX(-100%); }
            }
            @keyframes scroll-left {
             0%   { 
             -moz-transform: translateX(100%); /* Browser bug fix */
             -webkit-transform: translateX(100%); /* Browser bug fix */
             transform: translateX(100%);   
             }
             100% { 
             -moz-transform: translateX(-100%); /* Browser bug fix */
             -webkit-transform: translateX(-100%); /* Browser bug fix */
             transform: translateX(-100%); 
             }
            }
            .resume1{
                margin: auto;
                margin-top: 30px;
                height: 300px;
                text-align: center;
              /*  background-color: yellow; */
            }
            button{
                color: #fff;
                border: none;
                padding-left: 0;
                margin-top: 30px;
                font-size: 20px;
                font-weight: 500;
                cursor: pointer;
                background: linear-gradient(-135deg, #c850c0, #4158d0);
                transition: all 0.3s ease;
                border: 1px solid purple;
            }
            .button{
                height: 60px;
                  width: 60%;
                  outline: none;
                  font-size: 17px;
                  padding-left: 20px;
                  border: 1px solid lightgrey;
                  border-radius: 25px;
                  transition: all 0.3s ease;

            } 
            a{
                font-size: 28px;
                text-decoration: none;
                color: white;
            }
            .login{
                margin-top: 30px;
                position: relative;
                overflow: hidden;
                 transition: 0.5s;
                letter-spacing: 1px;
                 border-radius: 8px;
            }
            
            .register{
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
        <div class="page">
            <div class="resume">
                <div class="marquee">
                    <p class="title">TRANG WEB QUẢN LÝ MINH CHỨNG</p>
                </div>
            <div class="resume1">
            @if (Route::has('login'))
                <div>
                    @auth
                      <a href="{{ url('/home') }}" style="color: #1f1f1f;">Bạn Vào nhầm Trang rồi !<br> Quay Trở Lại Trang Quản Lý Thôi</a>
                    @else
                        <div class="login"><button class="button mask1" name="Hover" id="work"><span><a href="{{ route('login') }}">ĐĂNG NHẬP</a></span></button></div>

                        @if (Route::has('register'))
                            <div class="register"><button class="button"><a href="{{ route('register') }}">ĐĂNG KÝ</a></button><div>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        </div>
    </div>
    </body>
</html>
