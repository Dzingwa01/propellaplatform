@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="/css/Categories/main.css" />

{{--<div id="ICTIND">--}}
    {{--<div class="row">--}}
        {{--<div class="col l6">--}}
            {{--<div class="card">--}}
                {{--<div class="card-image waves-effect waves-block waves-light">--}}
                    {{--<span class="card-title activator white-text text-darken-4"><b id="ICTHeading">ICT.</b></span>--}}

                    {{--<a href="/Home/Incubatees"> <img class="activator" src="/images/Technology-Wallpapers-HD.jpg" style="height:800px;-webkit-filter: grayscale(100%);"></a>--}}
                {{--</div>--}}

            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="col l6">--}}
            {{--<div class="card">--}}
                {{--<div class="card-image waves-effect waves-block waves-light">--}}
                    {{--<span class="card-title activator white-text text-darken-4"><b id="INDHeading">IND.</b></span>--}}

                    {{--<a href="/Home/Incubatees"> <img class="activator" src="/images/pexels.jpeg" style="height:800px;"></a>--}}
                {{--</div>--}}


            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

{{--</div>--}}
{{--<div class="standard-top-section container-fluid" id="CurrentVenturesDesktop">--}}
    {{--<div class="row">--}}
        {{--<div class="col m6 l6 ICT">--}}
            {{--<div class="parallax-container" id="ICTParallax">--}}
                {{--<div class="parallax">--}}
                    {{--<img src="/images/Category Page images/Technology-Wallpapers-HD.jpg" id="ICTImage" />--}}
                {{--</div>--}}
                {{--<h1 class="standard-section-headers">Information Communication Technology</h1>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col m6 l6 IND">--}}
            {{--<div class="parallax-container" id="INDParallax">--}}
                {{--<div class="parallax">--}}
                    {{--<img src="~/images/Category Page images/Industrial_Image.jpg" id="INDImage" />--}}
                {{--</div>--}}
                {{--<h1 class="standard-section-headers">Industrial</h1>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

<div class="container-fluid" id="CurrentVenturesMobile">
    <div class="row ICT">
        <div class="col s6">
            <div class="parallax-container" id="ICTParallax">
                <div class="parallax">
                    <img src="/images/Category Page images/Technology-Wallpapers-HD.jpg" id="ICTImage" />
                </div>
                <h1 class="standard-section-headers">Information Communication Technology</h1>
            </div>
        </div>

        <div class="col s6">
        <div class="parallax-container IND" id="INDParallax">
            <div class="parallax">
                <img src="/images/Category Page images/Industrial_Image.jpg" id="INDImage" />
            </div>
            <h1 class="standard-section-headers">Industrial</h1>
        </div>
        </div>
    </div>
</div>

    <script>
        $(document).ready(function () {
            $('.parallax').parallax();
        });
        $('#ICTParallax').on('click', function () {
            location.href = '/Home/ICTVentures';
        });
        $('#INDParallax').on('click', function () {
            location.href = '/Home/INDVentures';
        });
    </script>
@endsection