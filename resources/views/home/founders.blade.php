@extends('layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="~/css/Founder/FounderMain.css" />
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

{{--@* Top Section *@--}}
{{--@*<div class="founders_class">*@--}}
    <div class="section row" id="FounderTopSection">
        <div class="col m3 center-align">
            <div class="row" id="FounderTopSectionImage">

            </div>
            <div class="row">
                <div class="chip">
                    ICT
                </div>
                <div class="chip">
                    IND
                </div>
                <div class="chip">
                    Health Care
                </div>
            </div>
        </div>
        <div class="col m3 left-align" id="FounderTopSectionName">
            <h2>Propella Business Incubator</h2>
        </div>

        <div class="col m6 left-align" id="FounderTopSectionElevatorPitch">
            <h4>Elevator Pitch</h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                officia deserunt mollit anim id est laborum.
            </p>
        </div>
    </div>

    {{--@* Second Section *@--}}
    <div id="FounderSecondSection" class="section row">
        <div id="FounderSecondSectionContent">
            <div class="row">
                <div class="col m3 left-align" id="FounderProfilePic"></div>

                <div class="col m5 center-align" id="FounderAboutMe">
                    <div class="row">
                        <h5>About Me</h5>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            officia deserunt mollit anim id est laborum.
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
                                <h6>Shannon</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s6">
                                <h6>Last Name: </h6>
                            </div>
                            <div class="col s6">
                                <h6>Olivier</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s6">
                                <h6>Email   :</h6>
                            </div>
                            <div class="col s6">
                                <h6>shannonharry@gmail.com</h6>
                            </div>
                        </div>
                        <div class="row center-align">
                            <div class="col s4" id="FacebookIcon">
                                <a href="#"><i class="small fa fa-facebook-official" aria-hidden="true"></i></a>
                            </div>
                            <div class="col s4" id="TwitterIcon">
                                <a href="#"><i class="small fa fa-twitter" aria-hidden="true"></i></a>
                            </div>
                            <div class="col s4" id="LinkedInIcon">
                                <a href="#"><i class="small fa fa-linkedin-square" aria-hidden="true"></i></a>
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

    {{--@* Third Section *@--}}
    <div id="FounderThirdSection" class="section row">
        <div class="col m6">
            <div class="row" id="VentureProfileRow">
                <h4>Venture Profile</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                    nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                    officia deserunt mollit anim id est laborum.
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
                <iframe style="width:80%;height:100%;" src="https://www.youtube.com/watch?v=Xcsp0486olY"></iframe>
            </div>
            <div class="row" id="CompanyDetailsRow">
                <h5>Company Details</h5>
                <div class="">
                    <p>Company Name: Company Name Here</p>
                </div>
                <div class="">
                    <p>BBBEE: I don't know</p>
                </div>
                @*<div class="row">
                    <div class="col s4">
                        <p>BBBEE: </p>
                    </div>
                    <div class="col s8">
                        <p>I don't know</p>
                    </div>
                </div>*@
            </div>

        </div>
    </div>

    {{--@* Fourth Section *@--}}
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
                {{--@*<a class="carousel-item" href="#two!"><img src="https://lorempixel.com/250/250/nature/2"></a>--}}
                <a class="carousel-item" href="#three!"><img src="https://lorempixel.com/250/250/nature/3"></a>
                <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/250/250/nature/4"></a>
                <a class="carousel-item" href="#five!"><img src="https://lorempixel.com/250/250/nature/5"></a>*@
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