@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="/css/CSSForAll.css"/>
    <div class="row">
        <div class="col s2" id="Innovators" style="cursor:pointer">
            <button class="btn" id="InnovateBtn">Innovators</button>
        </div>
        <div class="col s2" id="Partner" style="cursor:pointer">
            <button class="btn" id="PartnerBtn">Partner with us</button>
        </div>
        <div class="col s2" id="FutureMakers" style="cursor:pointer">
            <button class="btn" id="FutureMakersBtn">FutureMakers ICT</button>
        </div>
        <div class="col s2" id="Industrial" style="cursor:pointer">
            <button class="btn" id="IndustrialBtn">Industrial</button>
        </div>
        <div class="col s2" id="SmartCity" style="cursor:pointer">
            <button class="btn" id="SmartCityBtn">Smart City</button>
        </div>

        <div class="col s2" id="Apply" style="cursor:pointer">
            <button class="btn" id="ApplyBtn">Apply</button>
        </div>
    </div>

    <!-----Foooter---->
    <footer class="section grey lighter=2 white-text center">
        <div style="text-align:center;">
            Please Contact us at :<br/><i style="" class="icon-envelope ">anitha@propellaincubator.co.za</i>
            <a href=https://www.facebook.com/propellaincubator/ class="white-text">
                <i class="fab fa-facebook fa-2x"></i>
            </a>
            <a href="https://www.linkedin.com/company/propella-business-incubator/" class="white-text">
                <i class="fab fa-linkedin fa-2x"></i>
            </a>
            <a href=https://twitter.com/PropellaHub class="white-text">
                <i class="fab fa-twitter fa-2x"></i>
            </a>
            <a href=https://www.instagram.com/propellahub/ class="white-text">
                <i class="fab fa-instagram fa-2x"></i>
            </a>
            Copyright &copy; 2018 Propella
        </div>
    </footer>

    <!--JavaScript at end of body for optimized loading-->
    {{--<script type="text/javascript" src="js/materialize.min.js"></script>--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>

    <script>
        $(document).ready(function () {
            $('#Innovators').on('click', function () {
                location.href = "/Home/Innovators"
            });
            $('#Partner').on('click', function () {
                location.href = "/Home/Partners"
            });
            $('#FutureMakers').on('click', function () {
                location.href = "/Home/Incubatees"
            });
            $('#SmartCity').on('click', function () {
                location.href = "/Home/SmartCity"
            });
            $('#SmartCity').on('click', function () {
                location.href = "#"
            });
        });
    </script>
@endsection
