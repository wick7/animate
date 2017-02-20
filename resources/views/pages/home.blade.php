@extends('main')

@section('content')



        <title>Laravel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Bad+Script" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=BioRhyme|Ewert" rel="stylesheet">

        <!-- JQuery -->

        <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="//code.jquery.com/jquery-1.12.4.js"></script>
        

        <script type="text/javascript" src="{{ URL::asset('js/fade.js') }}"></script>

        <!-- Styles -->
        <style>
          
         /*First Pannel*/  

            .first_pan {
                background: url(/images/yard.jpg);
                background-size:  cover;
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
                color: rgb(255, 255, 255);
                font-family: 'Ewert', cursive;
                font-size: 90px;
                margin-top: -30px;
                
            }


            .info_table_first p {
                text-align: left;
                color: rgb(255, 255, 255);
                font-family: 'BioRhyme', serif;
                margin-right: 50%;
                font-size: 90%;
            }

            .button {
                
                background-color: rgb(2, 23, 255);
                border: none;
                color: white;
                /*padding: 15px 32px;*/
                padding: 2% 5%;
                text-align: left;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 0 auto;
                cursor: pointer;
                
                margin-bottom: 1%;
            }

            .btn2 {
                margin-left: 10em;
            }

           /* Second Pannel*/

            .second_pan {
                
                background-color: rgb(242, 242, 242);
            }


            .second_wrap {
                display: -webkit-flex;
                display: flex;
                -webkit-flex-direction: row;
                flex-direction: row;
                padding-top: em;
                padding-bottom: em;

            }


             .flex22 {  /*used in pannels 2 & 4*/
                display: -webkit-flex;
                display: flex;
                -webkit-flex-direction: column;
                flex-direction: column;
                height: 20em;
                width: 100%;
       
            }

            .flex1 {background: url(/images/chopping.jpg);}
            .flex2 {background: url(/images/winter_wood.jpeg); background-size: cover;}
            .flex3 {background: url(/images/planting.jpeg); background-size: cover;}


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


            .flex22:hover .overlay {
                  opacity:1;
                  
            }


            .flex22:hover #orange {
                opacity:1;
            }

            #orange {
               
                border-style: solid;
                border-width: 3px;
                border-color: rgb(255, 111, 2);
                /*margin-left: 1em;
                margin-right: 1em;
                margin-top: 1em;
                padding-bottom: 2em;*/
                margin: 1em;
                color: white;
                overflow: auto;
                height: 90%;
            }  

            #orange h1 {
                font-size: 2em;
                font-family: 'BioRhyme', serif;
                text-align: center;
                margin-top: 2em;
                margin-right: .3em;
                margin-left: .3em;
            }


            /*Third Pannel*/

            .flex33 {  /*used in pannels 2 & 4*/
                display: -webkit-flex;
                display: flex;
                -webkit-flex-direction: column;
                flex-direction: column;
                height: 18em;
                width: 25em;
                margin: 0 auto;
                justify-content:space-between;
       
            }

            .third_pan {
                position: relative;
                padding-top: 4em;
                padding-bottom: 4em;
            }

            .third_pan:before {
                content: '';
                position: absolute;
                background-image: url(/images/chopped.jpg);
                background-size: cover;
                display: block;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                opacity: 0.4;
                background-attachment: fixed;
                background-repeat: no-repeat;
                z-index: -1;
            }


            .tablet {
                height: 280px;
            }

            .third_wrap {
                display: -webkit-flex;
                display: flex;
                -webkit-flex-direction: row;
                flex-direction: row;
                
            }


            /*Fourth Pannel*/

            .flex4 {  /*used in pannels 2 & 4*/
                display: -webkit-flex;
                display: flex;
                -webkit-flex-direction: column;
                flex-direction: column;
                height: 18em;
                width: 25em;
                margin: 0 auto;
                justify-content:space-between;
       
            }


            .fourth_pan {
                /*background-image: url(http://www.w3schools.com/css/trolltunga.jpg);*/
                background-size: 100% 100%;
                background-repeat: no-repeat;
                background-color: rgb(2, 23, 255);
            }

            .fourth_wrap {
                display: -webkit-flex;
                display: flex;
                -webkit-flex-direction: row;
                flex-direction: row;
                
            }

            .fourth_flex {
                padding: 20px;
                background-color: red;
                margin-top: 10%;
                margin-bottom: 10%;
            }

            /*Fifth Pannel*/

            .flex5 {  /*used in pannels 2 & 4*/
                display: -webkit-flex;
                display: flex;
                -webkit-flex-direction: column;
                flex-direction: column;
                height: 18em;
                width: 25em;
                margin: 0 auto;
                justify-content:space-between;
       
            }

            .fifth_pan {
                background-color: gray;
                padding-top: 4em;
                padding-bottom: 4em;
                
                
            }

            .tablet {
                height: 280px;
            }

            .fifth_wrap {
                display: -webkit-flex;
                display: flex;
                -webkit-flex-direction: row;
                flex-direction: row;
                
            }
            
        </style>


        <div class="first_pan">        
            <div class="first_con first_table">
                <div class="info_table_first">
                    <div id="title"><h1>JOE'S </br>LUMBER</br> YARD</h1></div>
                    <div id="para">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <button class="button btn1">Learn More</button>
                    <button class="button btn2">Order Now</button>
                </div>
            </div>
            <div class="second_pan">
                <div class="second_con">
                    <div class="second_wrap">
                        <div class="flex22 flex1"><div class="overlay"><div id="orange"><h1>CUSTOM CUTS FOR ANY NEEDS</h1></div></div></div>
                        <div class="flex22 flex2"><div class="overlay"><div id="orange"><h1>FIRE WOOD ALL WINTER LONG</h1></div></div></div>
                        <div class="flex22 flex3"><div class="overlay"><div id="orange"><h1>FOR EVERY TREE CHOPPED, TWO MORE ARE PLANTED</h1></div></div></div>
                    </div>
                </div>
            </div>
            <div class="third_pan">
                <div class="third_con">
                    <div class="third_wrap">
                        <div class="flex33"><div class="fourth_flex"><h1>Call For A Quote</h1></div></div>
                        <div class="flex33"><div class="fourth_flex"><h1>CALL FOR A QUOTE</h1></div></div>
                    </div>
                </div>
            </div>
            <div class="fourth_pan">
                <div class="fourth_con">
                    <div class="fourth_wrap">
                        <div class="flex4"><div class="fourth_flex"><h1>THIS IS OVERLAY</h1></div></div>
                        <div class="flex4"><div class="fourth_flex"><h1>THIS IS OVERLAY</h1></div></div>
                    </div>
                </div>
            </div>
            <div class="fifth_pan">
                <div class="fifth_con">
                    <div class="fifth_wrap">
                        <div class="flex5"><div class="fourth_flex"><h1>THIS IS OVERLAY</h1></div></div>
                        <div class="flex5"><div class="fourth_flex"><h1>THIS IS OVERLAY</h1></div></div>
                    </div>
                </div>
            </div>
        </div>
@endsection


