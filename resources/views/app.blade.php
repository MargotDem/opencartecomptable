<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <script>
            window.env = "{{ env('APP_ENV') }}"
        </script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Open Carte Comptable</title>
        @if (env('APP_ENV') == "local")
            <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
            <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>
        @else
            <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet" type="text/css">
            <link rel="icon" type="image/x-icon" href="{{ secure_asset('favicon.ico') }}"/>
        @endif
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lora|Merriweather|Playfair+Display|Source+Serif+Pro" rel="stylesheet">
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC5lRs-K-ynKO525aDEktx3uZI_8Oa2SQ8&" async defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

        <!-- React Table CSS -->
        <link rel="stylesheet" href="https://unpkg.com/react-table@latest/react-table.css">
    </head>
    <body>
        <div id="root"></div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        @if (env('APP_ENV') == "local")
            <script src="{{ asset('js/app.js') }}" ></script>
        @else
            <script src="{{ secure_asset('js/app.js') }}" ></script>
        @endif

        <!-- React Table JS -->
        <script src="https://unpkg.com/react-table@latest/react-table.js"></script>
        <script src="https://unpkg.com/react-table@latest/react-table.min.js"></script>
        <script>
          var ReactTable = window.ReactTable.default
        </script>
    </body>
</html>
