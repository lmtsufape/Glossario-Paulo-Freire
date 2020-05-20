<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        

        <link href="{{ asset('video.js/node_modules/video.js/dist/video-js.min.css')}}" rel="stylesheet"/>

        <link href="{{ asset('video.js/node_modules/videojs-resolution-switcher/lib/videojs-resolution-switcher.css')}}" rel="stylesheet"/>

        <link rel="stylesheet" href="{{ asset('video.js/style.css') }}">
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
            
            <script src="{{ asset('video.js/node_modules/video.js/dist/video.js')}}"></script>
            <script src="{{ asset('video.js/node_modules/videojs-resolution-switcher/lib/videojs-resolution-switcher.js')}}"></script>

            <div class="container-fluid section">
                <div class="row">
                    <div class="col-md-6" style="height: 200px; width: 400px;">
                    <video id='video' class="video-js vjs-default-skin" controls style="width: 400px; max-width: 100%;"></video>
                    </div>
                </div>
            </div>
                        
            <script>
                videojs('video', {
                    controls: true,
                    fluid: true,
                    plugins: {
                        videoJsResolutionSwitcher: {
                        default: 'low', // Default resolution [{Number}, 'low', 'high'],
                        dynamicLabel: true
                        }
                    }
                }, function(){
                    var player = this;
                    window.player = player
                    player.updateSrc([
                        {
                        src: "{{ asset('teste.mp4')}}?SD",
                        type: 'video/mp4',
                        label: 'SD',
                        res: 360
                        },
                        {
                        src: "{{ asset('test.mp4')}}?HD",
                        type: 'video/mp4',
                        label: 'HD',
                        res: 720
                        }
                    ])
                    player.on('resolutionchange', function(){
                        console.info('Source changed to %s', player.src())
                    })
                })
            </script>
        </div>
    </body>
</html>
