@extends('main')

@section('content')



        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Bad+Script" rel="stylesheet">

        <!-- JQuery -->

        <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="//code.jquery.com/jquery-1.12.4.js"></script>
        

        <script type="text/javascript" src="{{ URL::asset('js/fade.js') }}"></script>

        <!-- Styles -->
        <style>
          
           

            .header {
                height: 100%;
                width: 100%;
                background-color: ;
            }

            

            .container {
                background: url(/images/black_white_bg.jpg);
                background-size: 100% 100%;
                background-repeat: no-repeat;
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
                color: black;
                font-family: 'Raleway', sans-serif;
                font-size: 90px;
                margin-top: 2px;
                

            }

            .table p {
                text-align: left;
                color: black;
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

            .tablet {
                height: 280px;
            }

            .animate {
                
                background-color: rgb(242, 242, 242);
            }


            .animate_con {
                padding-top: .5em;
                
                font-size: 3em;
                font-family: 'Bad Script';
                text-align: center;

            }


            .third {
                padding-top: 4em;
                padding-bottom: 4em;
                background-color: gray;
            }

            .fourth {
                background-image: url(http://www.w3schools.com/css/trolltunga.jpg);
                background-size: 100% 100%;
                background-repeat: no-repeat;
            }

            .fourth_flex {
                padding: 50px;
                background-color: red;
                margin-top: 10%;
            }

            .flexcontainer {
                display: -webkit-flex;
                display: flex;
                -webkit-flex-direction: row;
                flex-direction: row;
                padding-top: 2em;
                padding-bottom: 6em;
            }

            .flexcontainer2 {
                display: -webkit-flex;
                display: flex;
                -webkit-flex-direction: row;
                flex-direction: row;
                
            }

            .flexwrap > div {
                display: table-cell;
                min-width: 50%;
            }

            .flex {
                display: -webkit-flex;
                display: flex;
                -webkit-flex-direction: column;
                flex-direction: column;
                height: 18em;
                width: 25em;
                margin: 0 auto;
       
            }

            .flex1 {background: url(https://www.nasa.gov/sites/default/files/styles/image_card_4x3_ratio/public/thumbnails/image/pia20645_main.jpg?itok=dLn7SngD); }
            .flex2 {background: url(http://7606-presscdn-0-74.pagely.netdna-cdn.com/wp-content/uploads/2016/03/Dubai-Photos-Images-Photos-of-Dubai-800x600.jpg);}
            .flex3 {background: url(http://www.gettyimages.com/gi-resources/images/frontdoor/creative/PanoramicImagesRM/FD_image.jpg);}

            .overlay {
                background: rgba(0, 0, 0, .75);
                color: white;
                text-align: center;
                vertical-align: middle;
                line-height: 15em;
                height: 100%;
                width: 100%;
                opacity: 0;
                -webkit-transition: opacity .25s ease;
            }

            .flex:hover .overlay {
                  opacity:1;
                  
            }   
        </style>

        <div class="container">        
            <div class="header header_table">
                <div class="table">
                    <div id="title"><h1>Welcome</h1></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <button class="button btn1">Learn More</button>
                    <button class="button btn2">Sign-Up</button>
                </div>
            </div>
            <div class="animate">
                <div class="animate_con">We're Here For All Your Needs</div>
                <div class="animate_wrap">
                    <div class="flexcontainer">
                        <div class="flex flex1"><div class="overlay"><h1>THIS IS OVERLAY</h1></div></div>
                        <div class="flex flex2"><div class="overlay"><h1>THIS IS OVERLAY</h1></div></div>
                        <div class="flex flex3"><div class="overlay"><h1>THIS IS OVERLAY</h1></div></div>
                    </div>
                </div>
            </div>
            <div class="third">
                <img class="tablet" src="https://designcode.io/cloud/ios9-ipad/ipad.jpg">
            </div>
            <div class="fourth">
                <div class="fourthcontainer">
                    <div class="flexcontainer2">
                        <div class="flex"><div class="fourth_flex"><h1>THIS IS OVERLAY</h1></div></div>
                        <div class="flex"><div class="fourth_flex"><h1>THIS IS OVERLAY</h1></div></div>
                    </div>
                </div>
            </div>
        </div>
@endsection


