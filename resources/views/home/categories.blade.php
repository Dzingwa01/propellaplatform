@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="/css/Categories/main.css" />

<div id="ICTIND">
    <div class="row">
        <div class="col l6">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <span class="card-title activator white-text text-darken-4"><b id="ICTHeading">ICT.</b></span>

                    <a href="/Home/Incubatees"> <img class="activator" src="/images/Technology-Wallpapers-HD.jpg" style="height:800px;-webkit-filter: grayscale(100%);"></a>
                </div>

            </div>
        </div>

        <div class="col l6">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <span class="card-title activator white-text text-darken-4"><b id="INDHeading">IND.</b></span>

                    <a href="/Home/Incubatees"> <img class="activator" src="/images/pexels.jpeg" style="height:800px;"></a>
                </div>


            </div>
        </div>
    </div>

</div>
@endsection