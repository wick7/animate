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

<link href='css/css.css' rel="stylesheet" type="text/css" >
<link href="{{ URL::to('css/css.css') }}" rel="stylesheet" type="text/css" >

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


