<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>寺社めぐり</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #7FFFD4;
                color: #7B68EE;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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

            .header {
                text-align: center;
               background-color:#D3DEF1;
               width:100%;
            }

            .title {
                font-size: 84px;
                color:white;
            }

            .links > a {
                color: #636b6f;
                padding: 0 10px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .image {
                background-image: ('/bus.jpeg');
            }
        </style>
    </head>
    
    <body>
        <div class="">
            <div class="header" id="top" style="">
                    <span class="title">寺社めぐり</span>
            </div>
            <div class="image">
                
            </div>
            
            @if (Route::has('login'))
                <div class="">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">ログイン</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">新規登録</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="">
                

                <div class="links">
                    
                    <a href="https://a932d00dd3614a6bb8fa073c72e8ce01.vfs.cloud9.ap-northeast-1.amazonaws.com/admin/news/create">投稿</a>
                    <a href="https://a932d00dd3614a6bb8fa073c72e8ce01.vfs.cloud9.ap-northeast-1.amazonaws.com/admin/news">ニュース一覧</a>
                    <a href="https://calendar.google.com/calendar/u/0/r">カレンダー</a>
                    
                </div>
                     
                    <p><a href="#top">上へ戻る</a></p>
            </div>
        </div>
    </body>
</html>
