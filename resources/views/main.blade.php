<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title> 

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body, .container {
                height: 100%;
                width: 100%;
                outline: 0px;
                border: 0px;
                padding: 0px;
                margin: 0px;

            }

            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #333;
            }

            li {
                float: right;
            }

            li a {
                display: block;
                color: white;
                text-align: center;
                padding: 24px 26px;
                text-decoration: none;
            }

            li a:hover:not(.active) {
                background-color: #4CAF50;
            }

            .active {
                background-color: #111;
            }

            .logo {
                display: block;
                float: left;
                /*padding: 24px 26px;*/
                background-color: #4CAF50;
                color: white;
                text-align: center;
                text-decoration: none;

            }

            img {
                max-width:30%;
                max-height:30%;
            }
            
        </style>
    </head>
    <body>

            <ul>
              <li class="logo"><img src="http://image.flaticon.com/teams/1-freepik.jpg"></li>  
              <li><a href="{{ url('gallery') }}">Gallery</a></li>
              <li><a href="{{ url('about') }}">About</a></li>
              <li><a href="{{ url('/') }}">Home</a></li>
            </ul>

        <div class="container">
            
        @yield('content')

        </div>

    
    </body>
</html>
