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
                background-color: purple;
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

                
                <ul>
              
              <li><a href="{{ url('about') }}">About</a></li>
              <li><a href="{{ url('/') }}">Home</a></li>
            </ul> 
                    <h1>Attribution</h1>
                    
                    <div>Icons made by <a href="http://www.flaticon.com/authors/madebyoliver" title="Madebyoliver">Madebyoliver</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
                        <div>Icons made by <a href="http://www.flaticon.com/authors/nikita-golubev" title="Nikita Golubev">Nikita Golubev</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
                        <div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
                        <div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
                </div>
                
            </div>
            <div class="animate">
                
            </div>
        </div>
        
@endsection
