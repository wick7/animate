@extends('main')

@section('content')



        <title>Laravel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

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
          
         /*First Pannel*/  

            .first_pan {
                background: url(/images/black_white_bg.jpg);
                background-size: 100% 100%;
                background-repeat: no-repeat;
                height: 100%;
                width: 100%;
                
            }

            .first_con {
                height: 100%;
                width: 100%;
                background-color: ;
            }

            .first_table {
                display: table;
            }


            .info_table_first {
                display: table-cell;
                height: 100%;
                width: 100%;
                padding-left: 40px;
                padding-top: 40px;

            }

            .info_table_first h1 {
                text-align: left;
                color: black;
                font-family: 'Raleway', sans-serif;
                font-size: 90px;
                margin-top: 2px;
                
            }


            .info_table_first p {
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

           /* Second Pannel*/

            .second_pan {
                
                background-color: rgb(242, 242, 242);
            }

            .second_title {
                padding-top: .5em;
                
                font-size: 3em;
                font-family: 'Bad Script';
                text-align: center;

            }


            .second_wrap {
                display: -webkit-flex;
                display: flex;
                -webkit-flex-direction: row;
                flex-direction: row;
                padding-top: 2em;
                padding-bottom: 2em;


            }



             .flex {  /*used in pannels 2 & 4*/
                display: -webkit-flex;
                display: flex;
                -webkit-flex-direction: column;
                flex-direction: column;
                height: 18em;
                width: 25em;
                margin: 0 auto;
                justify-content:space-between;
       
            }

            .flex1 {background: url(https://www.nasa.gov/sites/default/files/styles/image_card_4x3_ratio/public/thumbnails/image/pia20645_main.jpg?itok=dLn7SngD); }
            .flex2 {background: url(http://7606-presscdn-0-74.pagely.netdna-cdn.com/wp-content/uploads/2016/03/Dubai-Photos-Images-Photos-of-Dubai-800x600.jpg);}
            .flex3 {background: url(http://www.gettyimages.com/gi-resources/images/frontdoor/creative/PanoramicImagesRM/FD_image.jpg);}


            .overlay {
                background: rgba(0, 0, 0, .75);
                color: white;
                text-align: center;
                vertical-align: middle;
                height: 100%;
                width: 100%;
                opacity: 0;
                -webkit-transition: opacity .25s ease;
            }


            .flex:hover .overlay {
                  opacity:1;
                  
            }


            .flex:hover #orange {
                opacity:1;
            }

            #orange {
                padding: ;
                border-style: solid;
                border-width: 3px;
                border-color: orange;
                margin: 2em;
                line-height: 15em;
                color: white;
                font-size: 80%;
            }   


            /*Third Pannel*/

            .third_pan {
                padding-top: 4em;
                padding-bottom: 4em;
                background-color: gray;
            }

            .tablet {
                height: 280px;
            }



            /*Fourth Pannel*/


            .fourth_pan {
                background-image: url(http://www.w3schools.com/css/trolltunga.jpg);
                background-size: 100% 100%;
                background-repeat: no-repeat;
            }

            .fourth_wrap {
                display: -webkit-flex;
                display: flex;
                -webkit-flex-direction: row;
                flex-direction: row;
                
            }

            .fourth_flex {
                padding: 50px;
                background-color: red;
                margin-top: 10%;
            }
            
        </style>


        <div class="first_pan">        
            <div class="first_con first_table">
                <div class="info_table_first">
                    <div id="title"><h1>Welcome</h1></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <button class="button btn1">Learn More</button>
                    <button class="button btn2">Sign-Up</button>
                </div>
            </div>
            <div class="second_pan">
                <!-- <div class="second_title">We're Here For All Your Needs</div> -->
                <div class="second_con">
                    <div class="second_wrap">
                        <div class="flex flex1"><div class="overlay"><div id="orange"><h1>COST AWARENESS</h1></div></div></div>
                        <div class="flex flex2"><div class="overlay"><div id="orange"><h1>SERVICE</h1></div></div></div>
                        <div class="flex flex3"><div class="overlay"><div id="orange"><h1>QUALITY PRODUCTION</h1></div></div></div>
                    </div>
                </div>
            </div>
            <div class="third_pan">
                <img class="tablet" src="https://designcode.io/cloud/ios9-ipad/ipad.jpg">
            </div>
            <div class="fourth_pan">
                <div class="fourth_con">
                    <div class="fourth_wrap">
                        <div class="flex"><div class="fourth_flex"><h1>THIS IS OVERLAY</h1></div></div>
                        <div class="flex"><div class="fourth_flex"><h1>THIS IS OVERLAY</h1></div></div>
                    </div>
                </div>
            </div>
        </div>
@endsection


