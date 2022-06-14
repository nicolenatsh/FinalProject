<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Oleh.in</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <style>
            table, th, td {
                border-collapse: collapse;
                }
            th, td {

                padding: 5px;
                text-align: center;
            }
            th {
                text-align: center;
            }
            .button {
                background-color: #FFFFFF; /* Green */
                border-radius: 8px;
                border: 2px solid #B26B00;
                color: #B26B00;
                padding: 5px 24px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 14px;
                transition-duration: 0.4s;
            }

            .button-red {
                background-color: #FFFFFF; /* Green */
                border-radius: 8px;
                color: #FF0000;
                padding: 5px 12px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 14px;
                transition-duration: 0.4s;
            }

            .button:hover {
                background-color: #B26B00; /* Green */
                color: #FFFFFF;
            }

            .button-red:hover {
                background-color: #FF0000; /* Green */
                color: #FFFFFF;
            }

            .header {
                color: #B26B00;
                font-size: 32px;
                text-align: center;
                font-weight: bold;
            }

            i {
                width: 25px;
                margin-right: 5px;
                padding: 32px 32px;
                display: inline-block;
                color: #B26B00;
            }

            .bread:hover {
                color: #EFA73B;
            }

            .row {
                padding: 5px;
                margin-bottom: 15px;
                width: 100%;
            }

            .row .card {
                background-color: #FFE6BF;
                padding: 5px;
                margin-bottom: 15px;
                height: 440px;
            }

            .frame {
                width: 320px;
                height: 180px;
                overflow: hidden;
                display: block;
                margin-left: auto;
                margin-right: auto;
            }

            .center {
                display: block;
                margin-left: auto;
                margin-right: auto;
            }

            .triggerdrop {
                color: #B26B00;
                padding: 5px 24px;
                text-align: center;
                text-decoration: none;
                display: block;
                font-size: 14px;
                transition-duration: 0.4s;
            }

            .bread {
                color: #B26B00;
                transition-duration: 0.4s;
            }
            

        </style>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')
            @include('sweetalert::alert')
            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
