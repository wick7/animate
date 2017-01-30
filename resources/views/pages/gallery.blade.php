@extends('main')

@section('content')

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

        <!-- Styles -->
        <style>
            

            .header {
                height: 100%;
                width: 100%;
                background-color: green;
            }

            .header_table {
                display: table;
            }

            .table {
                display: table-cell;
                vertical-align: middle;
                height: 100%;
                width: 100%;
            }

            .table h1 {
                text-align: center;
                color: white;
                font-family: 'Raleway', sans-serif;
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

            input {
                border: 1px;
                background-color: yellow;
                display: inline-block;
                vertical-align: middle;
                text-align: center;
                height: 100%;
                
            }
            
        </style>

        <div class="container">
            <div class="header header_table">
                <div class="table">
                    <h1>Gallery</h1>
                    <input class="button" type="button" value="test"/> 
                </div>
                
            </div>
            <div class="animate">
                <img class="tablet" src="https://designcode.io/cloud/ios9-ipad/ipad.jpg">
            </div>
        </div>
        
@endsection
