@extends('layouts.app')

@section('content')
    <link rel="stylesheet" type="text/css" href="/css/Incubatees/main.css" />
    <br />
    {{--<div class="row" id="INCImage">--}}
    {{--<h4 id="ICTHead">ICT VENTURES</h4>--}}
    {{--</div>--}}
    {{--<div class="parallax-container">--}}
    {{--<h4 id="ICTHead">ICT VENTURES</h4>--}}
    {{--<div class="parallax"><img id="INCImage" src="/images/5 Ventures.jpg"></div>--}}
    {{--</div>--}}
    <div class="row">
        <div class="parallax-container" id="ictTopSection">
            <div class="parallax">
                <img src="/images/About/aeroplane-aircraft-airplane-638698.jpg" id="topImageICT" />
            </div>
            <h1 class="standard-section-headers" style="color:white">Industrial Ventures</h1>
        </div>
    </div>
    <br />

    <div class="row">
        @foreach ($incubatees as $incubatee)
            <div class="col s12 m3">
                <div class="card white hoverable" >
                    <div class="circle">
                        <div class="card-content black-text " style="height: 350px;">
                            <div class="user-view" align="left">
                                <a href="#user"><img class="fullscreen" style="height: 100px;width: 250px;" src="{{'/storage/'.$incubatee->logo_url}}"></a>
                            </div>
                            <br />
                            <h6 class=""> {{$incubatee->user->name . ' ' . $incubatee->user->surname}}</h6>
                            <h6 class=""> {{$incubatee->user->startup_name}} </h6>
                            <h6 class=""> {{$incubatee->user->email}} </h6>
                            <h6 class=""> {{$incubatee->user->contact_number}} </h6>
                            {{--<div id="u136_text" class="text ">--}}
                            {{--<p>{{$incubatee->short_bio}}</p>--}}
                            {{--</div>--}}
                        </div>
                        <div class="card-action">
                            <a href="{{url('/Home/Founders/'.$incubatee->id)}}">VIEW PROFILE</a>
                            <a href=''>Funding</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection