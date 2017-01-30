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
                background-color: white;
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
                color: black;
                font-family: 'Raleway', sans-serif;
            }

            #title {
                font-family: 'Raleway', sans-serif;
                font-size: 4em;
                font-color: black;
                text-align: center;
            }

            .animate {
                padding-top: 4em;
                padding-bottom: 4em;
                background-color: yellow;
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

            .flexcontainer {
                display: -webkit-flex;
                display: flex;
                -webkit-flex-direction: column;
                flex-direction: column;
            }

            .flex {
                display: -webkit-flex;
                display: flex;
                -webkit-flex-direction: row;
                flex-direction: row;
                background-color: orange;
                padding: 10px;
                width: auto;
                border: solid;
                margin-bottom: 10px;
                margin-right: 10%;
                margin-left: 10%;
            }

            .section {
                padding: 50px;
                width: 100%;
                display: inline;
                margin-left: 5%;
                margin-right: 5%;
                text-align: center;
            }

            .photo {
                background-color: red;
            }

            .text {
                background-color: yellow;
            }
            
        </style>

        <div class="container">
            <div class="header header_table">

                <div class="table">
                    <div class="animate">
                    <div id="title">WHO WE ARE</div>
                </div>
                    <h1>About</h1>
                    <div class="flexcontainer">
                      <div class="flex">
                        <div class="section photo"><img src="https://si.wsj.net/public/resources/images/BN-FE385_airbnb_P_20141023171857.jpg"></div>
                        <div class="section text"><h1>Some Guy</h1><h3>CEO</h3>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                        </div>
                      </div>
                      <div class="flex">
                        <div class="section text"><h1>Another Employee</h1>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
                        <div class="section photo"><img src="https://media.licdn.com/media-proxy/ext?w=800&h=800&hash=WDEdpoSPGesq1kHkGsMR9%2BaCUwc%3D&ora=1%2CaFBCTXdkRmpGL2lvQUFBPQ%2CxAVta5g-0R6nnwgMwUxwrb6Tokv-9xQJRI_dGG__CmLp5IbfPWi8esLef-CmpV4WeTNSxlZgKe6oRy3kQZO8No7oK9lsgp7mco3iP15TbUllhDseuNR1Mwkj6oKjF7ahNHYehr8IO3vlY-m5"></div>
                      </div>
                      <div class="flex">
                        <div class="section photo"></div>
                        <div class="section text"></div>
                      </div>
                      <div class="flex">
                        <div class="section text"></div>
                        <div class="section photo"></div>
                      </div>
                    </div>
                </div>
                
            </div>
            <script src="//code.jquery.com/jquery-1.12.4.js"></script>
  <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src='assets/js/fade.js'></script>
        </div>

    

@endsection
