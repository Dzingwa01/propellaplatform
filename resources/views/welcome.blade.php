@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="/css/Home/HomePage.css"/>
    <div class="row">
        <div class="container" id="myCarousel">
            <div class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                    <li data-target="#myCarousel" data-slide-to="5"></li>
                    <li data-target="#myCarousel" data-slide-to="6"></li>
                </ol>

                <!--Wrapper for slides-->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="col s2 Innovators" id="" style="cursor:pointer">
                            <div class="txt" id="InnovateTxt" style="bottom:100px;">Innovators</div>
                            <div class="txt" id="InnovateTxt2" style="bottom:100px;">bring ideas to life</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col s2 Partner" id="" style="cursor:pointer">
                            <div class="txt" id="PartnerTxt" style="bottom:125px;">Partner with us</div>
                            <div class="txt" id="PartnerTxt2" style="bottom:125px;">join the winning team</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col s2 FutureMakers" id="" style="cursor:pointer">
                            <div class="txt" id="FutureMakersTxt" style="bottom:125px">FutureMakers ICT</div>
                            <div class="txt" id="FutureMakersTxt2" style="bottom:125px;">technology taking us to the future</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col s2 Industrial" id="" style="cursor:pointer">
                            <div class="txt" id="IndustrialTxt" style="bottom:125px">Industrial</div>
                            <div class="txt" id="IndustrialTxt2" style="bottom:125px;">leaders in the game</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col s2 SmartCity" id="" style="cursor:pointer">
                            <div class="txt" id="SmartCityTxt" style="bottom:125px">Smart City</div>
                            <div class="txt" id="SmartCityTxt2" style="bottom:125px;">innovation city</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col s2 Apply" id="" style="cursor:pointer">
                            <div class="txt" id="ApplyTxt">Apply</div>
                            <div class="txt" id="ApplyTxt2">show what you can do</div>
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <!--Desktop Display-->
        <div class="row" id="Tags">
            <div class="col s2 Innovators" id="" style="cursor:pointer">
                <text class="txt" id="InnovateTxt">Innovators</text>
                <text class="txt" id="InnovateTxt2">bring ideas to life</text>
            </div>
            <div class="col s2 Partner" id="" style="cursor:pointer">
                <text class="txt" id="PartnerTxt">Partner with us</text>
                <text class="txt" id="PartnerTxt2">join the winning team</text>
            </div>
            <div class="col s2 FutureMakers" id="" style="cursor:pointer">
                <text class="txt" id="FutureMakersTxt">Futuremakers ICT</text>
                <text class="txt" id="FutureMakersTxt2">technology taking us to the future</text>
            </div>
            <div class="col s2 Industrial" id="" style="cursor:pointer">
                <text class="txt" id="IndustrialTxt">Industrial</text>
                <text class="txt" id="IndustrialTxt2">leaders in the game</text>
            </div>
            <div class="col s2 SmartCity" id="" style="cursor:pointer">
                <text class="txt" id="SmartCityTxt">Smart City</text>
                <text class="txt" id="SmartCityTxt2">innovation city</text>
            </div>
            <div class="col s2 Apply" id="" style="cursor:pointer">
                <text class="txt" id="ApplyTxt">Apply</text>
                <text class="txt" id="ApplyTxt2">show what you can do</text>
            </div>
        </div>
    </div>

    <!-----Foooter---->
    {{--<footer class="section grey lighter=2 white-text center">--}}
        {{--<div style="text-align:center;">--}}
            {{--Please Contact us at :<br/><i style="" class="icon-envelope ">anitha@propellaincubator.co.za</i>--}}
            {{--<a href=https://www.facebook.com/propellaincubator/ class="white-text">--}}
                {{--<i class="fab fa-facebook fa-2x"></i>--}}
            {{--</a>--}}
            {{--<a href="https://www.linkedin.com/company/propella-business-incubator/" class="white-text">--}}
                {{--<i class="fab fa-linkedin fa-2x"></i>--}}
            {{--</a>--}}
            {{--<a href=https://twitter.com/PropellaHub class="white-text">--}}
                {{--<i class="fab fa-twitter fa-2x"></i>--}}
            {{--</a>--}}
            {{--<a href=https://www.instagram.com/propellahub/ class="white-text">--}}
                {{--<i class="fab fa-instagram fa-2x"></i>--}}
            {{--</a>--}}
            {{--Copyright &copy; 2018 Propella--}}
        {{--</div>--}}
    {{--</footer>--}}


    <script>
        $(document).ready(function () {
            $('.Innovators').on('click', function () {
                location.href = "/Home/Innovators"
            });
            $('.Partner').on('click', function () {
                location.href = "/Home/Partners"
            });
            $('.FutureMakers').on('click', function () {
                location.href = "/Home/Incubatees"
            });
            $('.SmartCity').on('click', function () {
                location.href = "/Home/SmartCity"
            });

        });
    </script>
@endsection
