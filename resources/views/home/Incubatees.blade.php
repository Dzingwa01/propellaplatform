@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="~/css/Incubatees/main.css" />
<br />
    <div id="INCImage">
        <h4 id="ICTHead">ICT VENTURES</h4>
    </div>
    <br />

    <div id="INCMargin">
        <div class="row">
            {{--@foreach (var incubatee in Model)--}}
                {{--{--}}
                {{--<div class="col s7 m4">--}}
                    {{--<div class="card white hoverable">--}}
                        {{--<div class="circle">--}}
                            {{--<div class="card-content black-text">--}}
                                {{--<div class="user-view" align="left">--}}
                                    {{--<a href="#user"><img class="fullscreen" style="height: 100px;width: 300px;" src="~/images/Propella_Logo.jpg"></a>--}}
                                {{--</div>--}}
                                {{--<br />--}}
                                {{--<span class="card-title"> @incubatee.FirstName </span>--}}
                                {{--@*<span class="card-title"> @incubatee.Email </span>*@--}}
                                {{--<div id="u136_text" class="text ">--}}
                                    {{--<p><span><b>My shopping buscket.</b></span></p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="card-action">--}}
                                {{--<div class="user-view" align="left">--}}
                                    {{--<a href="#user"><img class="circle" style="height: 50px;width: 50px;" src="~/images/th (1).jpg"></a>--}}
                                    {{--@*<a href="/Home//' + @incubatee.Id'"> View Profile </a>*@--}}
                                    {{--<a href="/Home/Founders/">VIEW PROFILE</a>--}}
                                    {{--<a href=''>Funding</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--}--}}
        </div>
    </div>
    @endsection