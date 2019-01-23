@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="/css/Incubatees/main.css" />
<br />
    {{--<div class="row" id="INCImage">--}}
        {{--<h4 id="ICTHead">ICT VENTURES</h4>--}}
    {{--</div>--}}
<div class="parallax-container">
    <h4 id="ICTHead">ICT VENTURES</h4>
    <div class="parallax"><img id="INCImage" src="/images/5 Ventures.jpg"></div>
</div>
    <br />

        <div class="row">
            @foreach ($incubatees as $incubatee)
                <div class="col s12 m3">
                    <div class="card white hoverable" >
                        <div class="circle">
                            <div class="card-content black-text " style="height: 350px;">
                                <div class="user-view" align="left">
                                    <a href="#user"><img class="fullscreen" style="height: 100px;width: 250px;" src="/images/Propella_Logo.jpg"></a>
                                </div>
                                <br />
                                <h6 class=""> {{$incubatee->first_name . ' ' . $incubatee->last_name}}</h6>
                                <h6 class=""> {{$incubatee->company_name}} </h6>
                                <h6 class=""> {{$incubatee->email}} </h6>
                                <h6 class=""> {{$incubatee->contact_number}} </h6>
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