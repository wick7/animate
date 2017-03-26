<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Joe's Lumber Yard</title> 

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Bad+Script" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=BioRhyme|Ewert" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body, .container {
                height: auto;
                width: auto;
                outline: 0px;
                border: 0px;
                padding: 0px;
                margin: 0px;
                
                
                background-color: ;
            }

            
         

            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                font-family: 'Open Sans', sans-serif;
                
            }

            li {
                float: right;

            }

            li a {
                display: block;
                color: white;
                text-align: center;
                padding: 12px 13px;
                text-decoration: none;
                margin-top: .5em;
            }

            li a:hover:not(.active) {
                background-color: rgb(2, 23, 255);
            }


            @media(min-width: 780px) {
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
                background-color: rgb(2, 23, 255);
            }
            }

            .active {
                background-color: #111;
            }

            .logo {
                display: block;
                float: left;
                font-family: 'Ewert', cursive;
                background-color: ;
                vertical-align: middle;
                color: white;
            }

            .logo_inner h1 {
                font-size: 3em;
               margin-top: .1em;
               margin-left: 0em;
            }


            
        </style>
    </head>
    
            

        <div class="container">
            

            
        @yield('content')
        @yield('footer')
        

        </div>
</html>
