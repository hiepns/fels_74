<!DOCTYPE html>
<html>
    <head>
        <title>{{ $title }}</title>
        {{ HTML::style('/bootstrap/css/bootstrap.min.css') }}
        {{ HTML::style('/bootstrap/css/bootstrap-theme.min.css') }}
        {{ HTML::style('/css/style.css') }}
    
        {{ HTML::script('http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.0.min.js') }}
        {{ HTML::script('/bootstrap/js/bootstrap.min.js') }}
    </head>
    <body>
        @include('layout.header')

        <div class="container">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                @if(Session::has('alert-' . $msg))
                    <div class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</div>
                @endif
            @endforeach

            <div class="contents"> @yield('content') </div>

            @include('layout.footer')
        </div>
    </body>
</html>
