<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>{{config('app.name', 'Personal Blog')}}</title>
        <script src="{{ asset('ckeditor/ckeditor.js') }}" defer></script>

    </head>
    <body class="antialiased">
        @include('inc.navbar')
        <div class="container">
            @yield('content')
        </div>

        <script type="text/javascript">
            $(document).ready(function () {
                $('.ckeditor').ckeditor();
            });
        </script>
    </body>
</html>
