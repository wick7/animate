@extends('main')

@section('content')

        <title>Joe's Lumber Yard</title>

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
                background-color: white;
            }

            .header_table {
                display: table;
            }


            .header_table h1 {
                text-align: center;
                color: black;
                font-family: 'Raleway', sans-serif;
            }

            #title {
                color: rgb(255, 255, 255);
                font-family: 'Ewert', cursive;
                font-size: 4em;
               
                text-align: center;
            }

            .animate {
                padding-bottom: 8em;
                background-image: url("https://static.pexels.com/photos/62301/forests-sky-foliage-from-the-bottom-of-the-62301.jpeg");
                background-repeat: no-repeat;
                background-size: cover;

            }

            .animate ul {
                padding-bottom: 2em;
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
                max-width: 1400px;
                margin: 40px auto 0 auto;

                
            }

            .img1 {background: url(/images/jack.jpg);background-size: cover; background-repeat: no-repeat;}
            .img2 {background: url(/images/jane.jpg);background-size: cover; background-repeat: no-repeat;}
            .img3 {background: url(/images/kid.png);background-size: cover; background-repeat: no-repeat;}

            .img {
                height: 18em;
                width: 20em;
            }

            .flex {
                padding: 30px;
                box-sizing: border-box;
                margin-bottom: 20px;
                flex-basis: 30%;
                   
            }

            .flex h1, h3 {
                text-align: center;
            }

            

            .sub1 img {
                max-width: 50%;
                max-height: 50%;
            }
             .sub2 img {
                max-width: 80%;
                max-height: 80%;
            }
             .sub3 img {
                max-width: 100%;
                max-height: 100%;
            }

        
            /*.flex:nth-child(1){background-color: blue;}
            .flex:nth-child(2){background-color: green;}
            .flex:nth-child(3){background-color: purple;}*/
           
            @media (min-width: 900px) {
                .flexcontainer {
                    display: -webkit-flex;
                    display: flex;
                    justify-content: space-between;
                    margin: 0 auto;
                }

            }
            }
      
            span {
                background-color: black;
                width: 1px;
                height: 25px;
            }
            
            
        </style>

        <div class="container">
            <div class="header header_table">
                    <div class="animate">
                    <ul>
                      <li><a href="{{ url('about') }}">About</a></li>
                      <li><a href="{{ url('/') }}">Home</a></li>
                    </ul>
                    <div id="title">WHO WE ARE</div></div>
                
                    <h1>The Choppers and the Stackers of Joe's Lumber Yard</h1>
                    <div class="flexcontainer">
                      <div class="flex sub1">
                        <div class="img img1"></div>
                        <h1>Joe Smith</h1><h3>Chopper & Stacker</h3>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                      </div>
                      <span></span>
                      <div class="flex sub2">
                      <div class="img img2"></div>
                        <h1>Suzy Smith</h1><h3>Chopper & Stacker</h3>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                      </div>
                      <span></span>
                      <div class="flex sub3">
                        <div class="img img3"></div>
                        <h1>Daisy Smith</h1><h3>Stacker</h3>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                       
                      </div>
                    </div>
                </div>
            </div>
                
        </div>
            <script src="//code.jquery.com/jquery-1.12.4.js"></script>
  <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src='assets/js/fade.js'></script>
        </div>

    

@endsection
