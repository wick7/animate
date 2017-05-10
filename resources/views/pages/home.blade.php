@extends('main')

@section('content')


<head>
<title>Joe's Lumber Yard</title>
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

<!-- <link href='css/css.css' rel="stylesheet" type="text/css" >
<link href="{{ URL::to('css/css.css') }}" rel="stylesheet" type="text/css" > -->

<style>
  .container_home {
    display: flex;
    flex-direction: column;
    width: auto;
}

/* First Pannel*/

.first_pan {
    background: url(/images/yard.jpg);
    background-size:  cover;
    background-repeat: no-repeat;
    
    height: 30em;
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
    font-size: 400%;
    background-color: ;
    margin-top: -20px;
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
    padding: 5px;
    text-align: center;
    text-decoration: none;
    font-size: 13px;
    cursor: pointer;
    font-family: 'Open Sans', sans-serif;
    border-radius: 10px 10px;


}

@media (min-width: 906px) {
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
    .first_con h1 {
        text-align: center;
        color: rgb(255, 255, 255);
        /*font-family: 'Ewert', cursive;*/
        font-family: 'Quicksand', sans-serif;
        font-size: 700%;
        background-color: ;
        margin-bottom: 0px;
    }

    .first_pan {
        background: url(/images/yard.jpg);
        background-size:  cover;
        background-repeat: no-repeat;

        height: 45em;
        width: 100%;

    }
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

/* End First Pannel */


/*BANNER PANNEL*/
    
.banner_pan {
    width: 100%;
    /*background-color: black;*/
    overflow: auto;
    background: rgba(28,28,28,1);
    background: gradient(left, rgba(28,28,28,1) 0%, 
        rgba(31,31,31,1) 12%, 
        rgba(36,36,36,1) 25%, 
        rgba(26,26,26,1) 39%, 
        rgba(15,15,15,1) 50%, 
        rgba(0,0,0,1) 51%, 
        rgba(5,5,5,1) 60%, 
        rgba(15,15,15,1) 76%, 
        rgba(10,10,10,1) 91%, 
        rgba(5,5,5,1) 100%);
}

.banner_wrap {
    width: auto;
}

.banner_wrap h1 {
    text-align: center;
    font-family: 'Clicker Script', cursive;
    font-size: 1.2em;
    color: white;
}

.banner_wrap h2 {
    float: right;
    margin-right: 2%;
    font-family: 'Clicker Script', cursive;
    font-size: .7em;
    color: white;
}

@media(min-width: 780px) {
    .banner_wrap h1 {
        text-align: center;
        font-family: 'Clicker Script', cursive;
        font-size: 2.5em;
        color: white;
    }

    .banner_wrap h2 {
        text-align: right;
        margin-right: 1%;
        font-family: 'Clicker Script', cursive;
        font-size: 1.5em;
        color: white;
    }
}

/*BANNER PANNEL END */



/* Second Pannel */

.second_pan {
    background-color: ;
    display: flex;
    flex-direction: column;
}

.second_pan h1,p {
    text-align: center;
    color: black;
}

.second_pan h1 {
    font-size: 5em;
    font-family: 'Quicksand', sans-serif;
}

.second_pan p {
    font-size: 1em;
    margin-top: 0em;
    margin-left: 0em;
    margin-right: 2em;
    color: gray;
    font-family: 'Open Sans', sans-serif;
}

.second_wrap {
    display: -webkit-flex;
    display: flex;
    -webkit-flex-direction: column;
    flex-direction: column;
    margin: 0 auto;
    margin-top: 5em;
}

.overlay_bef {

    box-sizing: border-box;
    margin-left: 0em;
    border-radius: 10px 10px;
    height: 300px;
    margin-bottom: 5em;
    text-align: center;
    font-size: 2em;
}

.overlay_bef1 {
    background: url(/images/chopping.jpg);
    background-color: ;
    background-size: cover;
    background-repeat: no-repeat;

}

.overlay_bef2 {
    background: url(/images/winter_wood.jpeg);
    background-color: ;
    background-size: cover;
    background-repeat: no-repeat;
}

.overlay_bef3 {
    background: url(/images/planting.jpeg);
    background-color: ;
    background-size: cover;
    background-repeat: no-repeat;
}

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
    width: 9.5em;
}

.overlay h1 {
    font-size: 50%;
    font-family: 'Quicksand', sans-serif;
    text-align: center;
    margin-top: 2em;
    margin-right: .3em;
    margin-left: .3em;
    color: white;
}

.overlay_bef .overlay {}
.overlay_bef #orange {}


.overlay_bef h2 {
    display: block;
}
.overlay_bef1, .overlay_bef3 h2 {
    color: white;
}


@media (min-width: 906px) {
    .second_wrap {
        display: -webkit-flex;
        display: flex;
        -webkit-flex-direction: row;
        flex-direction: row;
        margin: 0 auto;
        justify-content: space-between;
        width: auto;
        margin-top: 5em;
        margin-left: 2em;
        margin-right: 2em;
    }
    .overlay_bef:hover .overlay {
        opacity: 1;
        border-radius: 10px 10px;

    }
    .overlay_bef:hover #orange {
        opacity: 1;
        border-radius: 10px 10px;

    }

    .overlay_bef {
        flex-basis: 10%;
        flex-grow: 0;
        flex-shrink: 0;
    }

    .overlay_bef h1 {
        visibility: visible;
        font-size: 1em;
    }
    .overlay_bef h2 {
        display: none;
    }

}
    
/* End Second Pannel*/  
    
/*Third Pannel*/


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
    
/* End Third Pannel */
    


/* Fourth Pannel*/

.fourth_pan {
    height: 55em;
    width: 100%;
    background-color: ;
    display: flex;
    flex-direction: column;
}

.row_con,
.col_con {
    display: flex;
    flex-direction: column;
    height: 100%;
}

.row_wrap,
.col_wrap {
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
}



.row_wrap img,
.col_wrap img {
    margin-bottom: 10px;
}

.row_wrap h1,
.col_wrap h1 {
    margin-bottom: 0px;
}

.row_wrap p,
.col_wrap p {color:black;}

.con1, .con3  {
    background-color: ;
    flex: 1;
}

.con2, .con4 {
    background-color: ;
    flex: 1;
}


.fourth_pan img {
    width: 60px;
    height: 60px;
}

.con2 hr,
.con3 hr,
.con4 hr {
    visibility: hidden;
}


    
    
@media (min-width: 760px) {
  
    .fourth_pan {
        height: 400px;
        width: 100%;
        background-color: ;
        display: flex;
        flex-direction: column;
    }

    .row_con,
    .col_con {
        display: flex;
        flex-direction: row;
        height: 100%;
    }

    .row_wrap,
    .col_wrap {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .con1 {
        background-color: white;
    }

    .con2 hr {
        width: 80%;
        transform: rotate(180deg);
        position: relative;
        bottom: 10em;
    }

    .con3 {
        background-color: white;
    }

    .con3 hr,
    .con4 hr {
        width: 80%;
        transform: rotate(180deg);
        margin-top: -.2em;
    }
}

/* End Fourth Pannel*/
    
    
   

/* Fifth Pannel - last section/footer*/

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

/* End Fifth Pannel - last section/footer*/

</style>

</head>

<div class="container_home">
  <div class="first_pan">
    <ul>
      <li id="nav" class="logo"><div class="logo_inner"><h1>JLY</h1></div></li>  
      <li><a href="{{ url('about') }}">About</a></li>
      <li><a href="{{ url('/') }}">Home</a></li>
    </ul> 
    <div class="first_con">
      <h1>JOE'S</br>LUMBER</br>YARD</h1>                    
      <div class="btn_con_first">
        <a href="{{ url('/') }}"><button class="button btn1">Learn More</button></a>
        <a href="{{ url('/') }}"><button class="button btn2" >Order Now</button></a>
      </div>
    </div>
  </div>
  <div class="banner_pan">
    <div class="banner_wrap">
      <h1>I went to the woods because I wished to live deliberately...</h1>
      <h2>-Henry David Thoreau<h2>
      </div>
    </div>
    <div class="second_pan">
      <div class="second_con" href="#">
        <h1>What We Offer</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
        <hr>
        <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
        <div class="second_wrap">
          <div class="overlay_bef overlay_bef1"><h2>CUSTOM CUTS FOR ANY NEEDS</h2><div class="overlay"><h1>CUSTOM CUTS FOR ANY NEEDS</h1></div></div>
          <div class="overlay_bef overlay_bef2"><h2>FIRE WOOD ALL WINTER LONG</h2><div class="overlay"><h1>FIRE WOOD ALL WINTER LONG</h1></div></div>
          <div class="overlay_bef overlay_bef3"><h2>DISCOUNTS FOR MEMBERS</h2><div class="overlay"><h1>DISCOUNTS FOR MEMBERS</h1></div></div>
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
    <div class="fourth_pan">
      <div class="row_con">
        <div class="con1 row_wrap">
          <h1>FIRE SAFTEY CLASSES</h1>
          <img src="/images/campfire.png" />
          <p>Sed do eiusmod tempor incididunt ut labore.</p>
        </div>
        <hr>
        <div class="con2 row_wrap">
          <h1>TOOLS</h1>
          <img src="/images/hatchet.png" />
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="col_con">
        <div class="con3 col_wrap">
          <hr>
          <h1>WORKSHOP SPACE</h1>
          <img src="/images/chainsaw.png" />
          <p>Et dolore magna aliqua.</p>
        </div>
        <hr>
        <div class="con4 col_wrap">
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
          <a href="{{ url('gallery') }}">Attribution</a>
          <a href="{{ url('gallery') }}">Privacy Policy</a>
          <a href="{{ url('gallery') }}">All Rights Reserved</a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection


