@extends('main')
@section('footer')

<style>
	
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
</style>


            <div class="fifth_pan">
                <div class="fifth_con">
                    <div class="fifth_wrap">
                        <a href="{{ url('gallery') }}">Attributation</a>
                        <a href="{{ url('gallery') }}">Privacy Policy</a>
                        <a href="{{ url('gallery') }}">All Rights Reserved</a>
                    </div>
                </div>
            </div>
@endsection