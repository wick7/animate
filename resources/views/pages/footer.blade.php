@extends('main')
@section('footer')


            <ul>
              <li class="logo"><div class="logo_inner"></div></li>  
              <li><a href="{{ url('gallery') }}">Gallery</a></li>
              <li><a href="{{ url('about') }}">About</a></li>
              <li><a href="{{ url('/') }}">Home</a></li>
            </ul>
@endsection