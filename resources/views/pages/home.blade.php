@extends('main')

@section('content')



        <title>Laravel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Bad+Script" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=BioRhyme|Ewert" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Clicker+Script|Quicksand" rel="stylesheet">

        <!-- JQuery -->

        <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="//code.jquery.com/jquery-1.12.4.js"></script>
        

        <script type="text/javascript" src="{{ URL::asset('js/fade.js') }}"></script>

        <!-- Styles -->
        <style>

            /*Navigation*/

            
          
         /*First Pannel*/  

           .container_home {
                display: flex;
                flex-direction: column;
                width: auto;
           }

            .first_pan {
                background: url(/images/yard.jpg);
                background-size:  cover;
                background-repeat: no-repeat;
                max-height: 100%;
                height: 60em;
                width: 100%;
                
            }

            .first_pan li {
                margin: 1em;
            }

            

            .first_con h1 {
                text-align: center;
                color: rgb(255, 255, 255);
                /*font-family: 'Ewert', cursive;*/
                font-family: 'Quicksand', sans-serif;
                font-size: 5em;
                background-color: ;
                margin-bottom: 0px;
            }


            .first_con p {
                text-align: left;
                color: rgb(255, 255, 255);
                font-family: 'Open Sans', sans-serif;
                margin-right: 50%;
                font-size: 90%;
                background-color: ;

                
            }

            .first_con button {
                background-color: rgb(2, 23, 255);
                border: none;
                color: white;
                padding: 20px;
                text-align: center;
                text-decoration: none;
                font-size: 16px;
                cursor: pointer;
                font-family: 'Open Sans', sans-serif;
                border-radius: 10px 10px;
                
            }

            .btn_con_first {
                margin: 0 auto;
                width: 45%;                
                display: -webkit-flex;
                display: flex;
                -webkit-flex-direction: row;
                flex-direction: row;
                justify-content: space-between;
            }
 

          

           /* Fourth Pannel - former second*/

            .fourth_pan {
                
                background-color: ;

            }

            .fourth_pan h1, p {
                text-align: center;
                color: black;
                
            }

            .fourth_pan h1 { 
                font-size: 4em;
                font-family: 'Quicksand', sans-serif;

            }

            .fourth_pan p { 
                font-size: 1em;
                margin-top: 0em;
                margin-left: 0em;
                margin-right: 2em;
                color: gray;
                font-family: 'Open Sans', sans-serif;


            }


            .fourth_wrap {
                display: -webkit-flex;
                display: flex;
                -webkit-flex-direction: row;
                flex-direction: row;
                margin: 0 auto;
                justify-content: space-between;
                width: auto;
                margin-top: 5em;


            }

            


            .overlay_bef {  
                height: auto;
                
                flex: 1;
                box-sizing: border-box;
                margin-left: 0em;
                border-radius: 10px 10px;
                
                height: 300px; 
                margin-bottom: 5em;

            }

            .overlay_bef1 {background: url(/images/chopping.jpg);background-size: cover; background-repeat: no-repeat;}
            .overlay_bef2 {background: url(/images/winter_wood.jpeg); background-size: cover; background-repeat: no-repeat;}
            .overlay_bef3 {background: url(/images/planting.jpeg); background-size: cover; background-repeat: no-repeat;}


            .overlay {
                background: rgba(0, 0, 0, .75);
                color: white;
                text-align: center;
                vertical-align: middle;                
                opacity: 0;
                -webkit-transition: opacity .25s ease;
                height: 100%;
                border-style: solid;
                border-width: 3px;
                border-color: rgb(255, 111, 2);
                border-radius: 10px 10px;

            }

            .overlay h1 {
                font-size: 30%;
                font-family: 'Quicksand', sans-serif;
                text-align: center;
                margin-top: 2em;
                margin-right: .3em;
                margin-left: .3em;
                color: white;
            }

            .overlay_bef:hover .overlay {
                  opacity:1;
                  border-radius: 10px 10px;
                  
            }


            .overlay_bef:hover #orange {
                opacity:1;
                border-radius: 10px 10px;
                
            }



            /*Third Pannel*/

            .flex33 {  /*used in pannels 2 & 4*/
                display: -webkit-flex;
                display: flex;
                -webkit-flex-direction: column;
                flex-direction: column;
                
                height: 18em;
                width: 20em;
                margin: 0 auto;
                justify-content:space-between;
       
            }

            .third_pan {
                position: relative;
                padding-top: 3em;
                padding-bottom: 3em;
            }

            .third_wrap {
                width: 100%;
            }

            .third_wrap h1 {
                text-align: center;
                font-size: 3em;
                color: white;
                font-family: 'Quicksand', sans-serif;
            }

            .third_pan:before {
                content: '';
                position: absolute;
                background-image: url(/images/shop.jpeg);
                background-size: cover;
                display: block;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                opacity: 0.7;
                background-attachment: fixed;
                background-repeat: no-repeat;
                z-index: -1;
            }

            .this2_pan {
                position: relative;
                padding-top: .5em;
                padding-bottom: 0em;
                z-index: 1;
                background-color: white;
            }

            .this2_wrap {
                width: 100%;
            }

            .this2_wrap h1 {
                text-align: center;
                font-family: 'Clicker Script', cursive;
                font-size: 4em;
            }

            .this2_wrap h2 {
                text-align: right;
                margin-top: .2em;
                margin-right: 3em;
                font-family: 'Clicker Script', cursive;
                font-size: 2em;
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


          /*  .fourth_pan {
                
                background-size: 100% 100%;
                background-repeat: no-repeat;
                background-color: white;
                
            }

            .fourth_wrap {
                display: -webkit-flex;
                display: flex;
                -webkit-flex-direction: row;
                flex-direction: row;
                align-items: center;
            }

            .fourth  {
                width: 6em;
                height: 6em;
                background-color: blue;

            }

            .fourth_flex {
                padding: 20px;
                background-color: red;
                margin-top: 10%;
                margin-bottom: 10%;
            }*/

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

            


            /* new section*/
            
            .master {
              height: auto;
              width: 100%;
              background-color: ;
              display: flex;
              flex-direction: column;
            }

            .row,
            .col {
                display: flex;
                flex-direction: column;
                height: 100%;
              }
            .row_con,
            .col_con {
                width: 100%;
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            @media (min-width: 760px) {
              .master {
              height: 400px;
              width: 100%;
              background-color: ;
              display: flex;
              flex-direction: column;
            }
              .row,
              .col {
                display: flex;
                flex-direction: row;
                height: 100%;
              }
              .row_con,
              .col_con {
                width: 100%;
                display: flex;
                flex-direction: column;
                align-items: center;
              }
              
              .row,
              .col {}

              .row_con,
              .col_con {}
            }


            /*  end media */

            .row_con img,
            .col_con img {
              margin-bottom: 10px;
            }

            .row_con h1,
            .col_con h1 {
              margin-bottom: 0px;
            }

            .row_con p,
            .col_con p {}

            .con1 {
              background-color: ;
              flex: 1;
            }

            .con2 {
              background-color: ;
              flex: 1;
            }

            .con3 {
              background-color: ;
              flex: 1;
            }

            .con4 {
              background-color: ;
              flex: 1;
            }

            .master img {
              width: 60px;
              height: 60px;
            }

            .con3 hr,
            .con4 hr {
              width: 80%;
              transform: rotate(180deg);
              margin-top: -.2em;
            }


            /*new section end*/


            /*this pan section*/

            .this_pan {
                position: relative;
                padding-top: 0em;
                background-image: url(https://static.pexels.com/photos/40973/background-brown-circle-cut-40973.jpeg);

            }

            .this_wrap {
                width: 50%;
                display: flex;
                flex-direction: row;
                align-content: center;

            }

            

            .this_text {
                background-color: ;
                display: flex;
                flex-direction: column;
                flex:1;
                align-items: center;
                height: 100%;
                padding-bottom: 5em;
                margin-left: 0em;

            }

            .this_text h1, h4, p {
                color: white;
                margin-bottom: -5px;
            }

            .this_wrap img {
                width: auto;
                height: 9em;
                float: right;
                margin-left: 0em;
                margin-top: 3.5em;
            }

            .this_text h1 {
                font-family: 'Quicksand', sans-serif;
                margin-top: 1em;
                font-size: 3.5em;
                color: white;
            }

            .this_text p {
                font-family: 'Open Sans', sans-serif;
                font-size: .9em;
            }

            .this_text h4  {
                font-size: 1.5em;
            }

            

            .this_pan:before {
                content: '';
                position: absolute;
                background-image: url(/images/shop.jpeg);
                background-size: cover;
                display: block;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                opacity: 0.6;
                background-attachment: fixed;
                background-repeat: no-repeat;
                z-index: -1;
            }

            /*last section - footer*/

            .fifth_pan {
                background-color: gray;
                padding-top: 1em;
                padding-bottom: 1em;
                
            }

            .fifth_pan a { 
                margin-left: 1em;
            }


            .fifth_wrap {
                display: -webkit-flex;
                display: flex;
                -webkit-flex-direction: row;
                flex-direction: row;
                
            }

           /* end last section - footer*/


         

            /*this section end*/
        </style> 
        <div class="container_home">
            <div class="first_pan">
                <ul>
                  <li class="logo"><div class="logo_inner"><h1>JLY</h1></div></li>  
                  <li><a href="{{ url('about') }}">About</a></li>
                  <li><a href="{{ url('/') }}">Home</a></li>
                </ul> 
                <div class="first_con">
                    <h1>JOE'S </br>LUMBER</br>YARD</h1>                    
                    <div class="btn_con_first">
                        <a href="{{ url('/') }}"><button class="button btn1">Learn More</button></a>
                        <a href="{{ url('/') }}"><button class="button btn2" >Order Now</button></a>
                    </div>
                </div>
            </div>
            <div class="this2_pan">
                <div class="this2_con">
                    <div class="this2_wrap">
                        <h1>I went to the woods because I wished to live deliberately...</h1>
                        <h2>-Henry David Thoreau<h2>
                    </div>
                </div>
            </div>
            <div class="this_pan">
                <div class="this_con">
                    <div class="this_wrap">
                    <img src="/images/bh.png"/>
                        <div class="this_text">
                        <h1>Build A Birdhouse</h1>
                        <h4>Every 2nd Saturday @1p.m.</h4>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="fourth_pan">
                <div class="fourth_con" href="#">
                <h1>What We Offer</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                <hr>
                <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
                    <div class="fourth_wrap">
                        <div class="overlay_bef overlay_bef1"><div class="overlay"><h1>CUSTOM CUTS FOR ANY NEEDS</h1></div></div>
                        <div class="overlay_bef overlay_bef2"><div class="overlay"><h1>FIRE WOOD ALL WINTER LONG</h1></div></div>
                        <div class="overlay_bef overlay_bef3"><div class="overlay"><h1>DISCOUNTS FOR MEMBERS</h1></div></div>
                    </div>
                </div>
            </div>
            <div class="third_pan">
                <div class="third_con">
                    <div class="third_wrap">
                        <h1>ASK ABOUT</h1>
                        <hr style="width: 40%;">
                    </div>
                </div>
            </div>
            <div class="master">
              <div class="row">
                <div class="con1 row_con">
                  <h1>FIRE SAFTEY CLASSES</h1>
                  <img src="/images/campfire.png" />
                  <p>Sed do eiusmod tempor incididunt ut labore.</p>
                </div>
                <hr>
                <div class="con2 row_con">
                  <h1>TOOLS</h1>
                  <img src="/images/hatchet.png" />
                  <hr>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
              <div class="col">
                <div class="con3 col_con">
                  <hr>
                  <h1>WORKSHOP SPACE</h1>
                  <img src="/images/chainsaw.png" />
                  <p>Et dolore magna aliqua.</p>
                </div>
                <hr>
                <div class="con4 col_con">
                  <hr>
                  <h1>WHITTLING CLASSES</h1>
                  <img src="/images/whittle.png" />
                  <p>Ut enim ad minim veniam, quis nostrud.</p>
                </div>
              </div>
            </div>
            <div class="fifth_pan">
                <div class="fifth_con">
                    <div class="fifth_wrap">
                        <a href="{{ url('gallery') }}">Attributation</a>
                        <a href="{{ url('gallery') }}">Privacy Policy</a>
                        <a href="{{ url('gallery') }}">All Rights Reserved</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('footer')
@endsection


