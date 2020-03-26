<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

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
        </style>
        <link href="css/video-js.css" rel="stylesheet">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
            <!-- Exemplo como plugin
                Exportação dos scripts que estão pasta public e da folha de estilos também em public
                
                source: diretorio do video
                scripts: js/scripts
                css/folha
             -->
           {{-- / <div id="videojs"> 
             <h1>Video.js Example Embed</h1> 

                <video-js id="my_video_1" class="vjs-default-skin" controls preload="auto" height="268">
                <source src="http-videos.glossario/Test.mp4" type="video/mp4">
                </video-js>

                <script src="js/video.js"></script>
                <script src="js/videojs-http-streaming.js"></script>

                <script>
                var player = videojs('my_video_1');
                </script>
            </div>--}}

            {{-- <video  id="example_video_direct_link"  
            class="video-js vjs-default-skin vjs-big-play-centered"
            controls 
            preload="auto" 
            width="640" 
            height="264"
            data-setup='{
                            "example_option":true
                        }'>
            <source src="http://acervo.paulofreire.org:8080/jspui/handle/7891/1893" type='video/mp4' />
            
    </video>--}}

    <iframe src="https://www.youtube.com/embed/npnp--SSx_8 "  allow="autoplay"></iframe>
        </div>
    </body>
</html>
