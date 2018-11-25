<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{!! asset('css/style.css') !!}" />
        <title>Laravel</title>
    </head>
    <body>


      <script>

        require('axios');
        window.onload = () => {
          console.log(axios);
        }

      </script>

    </body>
</html>
