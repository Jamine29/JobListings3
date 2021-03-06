<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Job Listings</title>

        <link rel="stylesheet" type="text/css" href="css/app.css">
    </head>
    <body>
        <div id="app">
            <app-layout></app-layout>
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
