@extends('main')

@section('content')



        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

        <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="//code.jquery.com/jquery-1.12.4.js"></script>
        

        <script type="text/javascript" src="{{ URL::asset('js/fade.js') }}"></script>

        <!-- Styles -->
        <style>
          

            .header {
                height: 100%;
                width: 100%;
                background-color: navy;
            }

            .header_table {
                display: table;
            }

            .table {
                display: table-cell;
                height: 100%;
                width: 100%;
                padding-left: 40px;
                padding-top: 40px;

            }

            .table h1 {
                text-align: left;
                color: white;
                font-family: 'Raleway', sans-serif;
                font-size: 90px;
                margin-top: 2px;
                

            }

            .table p {
                text-align: left;
                color: white;
                font-family: 'Raleway', sans-serif;
                
            }

            .button {
                
                background-color: #4CAF50;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 0 auto;
                cursor: pointer;
                margin-left: 90px;
            
            }

            .animate {
                padding-top: 4em;
                padding-bottom: 4em;
            }

            .animate img {
                position: relative;

            }

            .tablet {
                height: 280px;
            }

            
            
        </style>



        <div class="container">
            <div class="header header_table">
                <div class="table">
                    <div id="title"><h1>Welcome</h1></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <button class="button">Learn More</button>
                    <button class="button">Sign-Up</button>
                </div>
                
            </div>
            <div class="animate">
                <img class="tablet" src="https://designcode.io/cloud/ios9-ipad/ipad.jpg">
            </div>
        </div>
@endsection
