@extends('layouts.app')
@section('content')

<link rel="stylesheet" type="text/css" href="/css/Founder/FounderMain.css" />
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<div class="section row" id="FounderTopSection">
    <div class="col m3 center-align" style="height: 200px" id="">
        <img style="margin-top:4em;max-width: 90%;max-height: 60%" src="{{!is_null($incubatee->logo_url)?$incubatee->logo_url:'/images/ProfilePictures/NoProfilePic.jpg'}}" style="max-width: 100%"/>
        <br/>
        <br/>
        <div class="chip">
            {{$incubatee->cohort}}
        </div>
        <div class="chip">
            {{'Stage '.$incubatee->stage}}
        </div>
        <div class="chip">
            {{$incubatee->smart_city_tags}}
        </div>
    </div>
    <div class="col m3 left-align" style="height: 200px" id="FounderTopSectionName">
        <h4>Propella Business Incubator</h4>
    </div>

    <div class="col m6 left-align" style="height: 200px" id="FounderTopSectionElevatorPitch">
        <h5>Elevator Pitch</h5>
        <p>
           {{$incubatee->elevator_pitch}}
        </p>
    </div>
</div>
<div id="FounderSecondSection" class="section row">
    <div id="FounderSecondSectionContent">
        <div class="row">
            <div class="col m3 center-align" id="">
                <img style="margin:auto;width: 180px;max-height: 180px" src="/images/ProfilePictures/NoProfilePic.jpg"/>
            </div>

            <div class="col m5 center-align" id="FounderAboutMe">
                <div class="row">
                    <h5>About Me</h5>
                    <p>
                        {{$incubatee->short_bio}}
                    </p>
                </div>
            </div>

            <div class="col m3">
                <div class="row left-align" id="FounderDetails">
                    <h5>Details</h5>
                    <div class="row">
                        <div class="col s6">
                            <h6>First Name: </h6>
                        </div>
                        <div class="col s6">
                            <h6>{{$incubatee->first_name}}</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s6">
                            <h6>Last Name: </h6>
                        </div>
                        <div class="col s6">
                            <h6>{{$incubatee->last_name}}</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s6">
                            <h6>Email   :</h6>
                        </div>
                        <div class="col s6">
                            <h6>{{$incubatee->email}}</h6>
                        </div>
                    </div>
                    <div class="row center-align">
                        <div class="col s4" id="FacebookIcon">
                            <a href="{{$incubatee->facebook}}"><i class="small fa fa-facebook-official" aria-hidden="true"></i></a>
                        </div>
                        <div class="col s4" id="TwitterIcon">
                            <a href="{{$incubatee->twitter}}"><i class="small fa fa-twitter" aria-hidden="true"></i></a>
                        </div>
                        <div class="col s4" id="LinkedInIcon">
                            <a href="{{$incubatee->linked_id}}"><i class="small fa fa-linkedin-square" aria-hidden="true"></i></a>
                        </div>
                    </div>

                    <div class="row center-align">
                        <a class="waves-effect waves-light btn">Crowd Funding</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="FounderThirdSection" class="section row">
    <div class="col m6">
        <div class="row" id="VentureProfileRow">
            <h4>Venture Profile</h4>
            <p>
                {{$incubatee->business_information}}
            </p>

            <div class="row center-align">
                <div class="col s4" id="FacebookIconBusiness">
                    <a href="#"><i class="small fa fa-facebook-official" aria-hidden="true"></i></a>
                </div>
                <div class="col s4" id="TwitterIcon">
                    <a href="#"><i class="small fa fa-twitter" aria-hidden="true"></i></a>
                </div>
                <div class="col s4" id="LinkedInIcon">
                    <a href="#"><i class="small fa fa-linkedin-square" aria-hidden="true"></i></a>
                </div>
            </div>

        </div>
        <div class="row" id="SocialMediaRow">

        </div>
    </div>
    <div class="col m6">
        <div class="row" id="CompanyVideoRow">
            <iframe style="width:80%;height:100%;" src="https://www.youtube.com/embed/=Xcsp0486olY"></iframe>
        </div>
        <div class="row" id="CompanyDetailsRow">
            <h5>Company Details</h5>
            <div class="">
                <p>Company Name: {{$incubatee->company_name}}</p>
            </div>
            <div class="">
                <p>BBBEE: {{$incubatee->b_type}}</p>
            </div>

        </div>

    </div>
</div>
<div id="FounderFourthSection" class="section row center-align">
    <div class="col m6 " id="TestimonialsRow">
        <div class="carousel">
            <a class="carousel-item" href="#two!">
                <div class="card white">
                    <div class="card-content black-text">
                        <span class="card-title">Testimonials</span>
                        <p>
                            I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.
                        </p>
                    </div>
                </div>
            </a>
            <a class="carousel-item" href="#three!">
                <div class="card white">
                    <div class="card-content black-text">
                        <span class="card-title">Testimonials</span>
                        <p>
                            I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.
                        </p>
                    </div>
                </div>
            </a> <a class="carousel-item" href="#four!">
                <div class="card white">
                    <div class="card-content black-text">
                        <span class="card-title">Testimonials</span>
                        <p>
                            I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.
                        </p>
                    </div>
                </div>
            </a>

        </div>
    </div>
    <div class="col m6">

        <div class="row">
            <div class="fixed-action-btn">
                <a class="btn-floating btn-large waves-effect waves-light ">
                    <i class="large material-icons">contact_phone</i>
                </a>
                <ul>
                    <li><a class="btn-floating blue tooltipped" data-position="left" data-tooltip="+27 41 502 3700"><i class="material-icons">phone</i></a></li>
                    <li><a class="btn-floating grey tooltipped" data-position="left" data-tooltip="0861 55 55 33"><i class="material-icons">local_printshop</i></a></li>
                    <li><a class="btn-floating green tooltipped" data-position="left" data-tooltip="anita@propellaincubator.co.za"><i class="material-icons">email</i></a></li>
                </ul>
            </div>
            {{--@*<div class="fixed-action-btn">--}}
                {{--<a class="btn-floating waves-effect waves-light btn">Contact Us</a>--}}

                {{--<ul>--}}
                    {{--<li><a class="btn-floating red tooltipped" data-position="bottom" data-tooltip="I am a tooltip"><i class="material-icons">contact_phone</i></a></li>--}}
                    {{--<li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>--}}
                    {{--<li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>--}}
                    {{--<li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>--}}
                {{--</ul>--}}
            {{--</div>*@--}}

        </div>
        <div class="row" padding="width: 20px; height: 20px;">
            <a class="waves-effect waves-light btn">Invest In Us</a>
        </div>
    </div>
</div>
    @endsection