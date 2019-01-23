@extends('layouts.clerk-layout')

@section('content')

    <div class="row" style="margin-top:2em;">
        <h4 class="center">Dashboard</h4>
        <div class="col s12 m4">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title" style="font-weight: bolder">Incubatees</span>
                    <p style="font-weight: bolder">{{'Total Incubatees - '.count($incubatees)}}</p>
                    <table>
                        <thead>
                        <tr>
                            <th>ICT</th>
                            <th>Industrial</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            {{--<td>{{count($car_onwers)}}</td>--}}
                            {{--<td>{{count($car_valets)}}</td>--}}
                            {{--<td>{{ count($franchisees)}}</td>--}}
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-action">
                    <a href="{{url('users')}}">View Incubatees</a>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title" style="font-weight: bolder">ICT</span>
                    <p style="font-weight: bolder">{{'Total ICT Incubatees - '}}</p>
                    <table>
                        <thead>
                        <tr>
                            <th>Stage 1</th>
                            <th>Stage 2</th>
                            <th>Stage 3</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            {{--<td>{{count($car_onwers)}}</td>--}}
                            {{--<td>{{count($car_valets)}}</td>--}}
                            {{--<td>{{ count($franchisees)}}</td>--}}
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-action">
                    <a href="#">View Training Material</a>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
        <div class="card blue-grey darken-1">
        <div class="card-content white-text">
        <span class="card-title" style="font-weight: bolder">Industrial</span>
        <p style="font-weight: bolder">{{'Total Industrial Incubatees - '.count($incubatees)}}</p>
        <table>
        <thead>
        <tr>
        <th>Stage 1</th>
        <th>Stage 2</th>
        <th>Stage 3</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        {{--<td>{{count($car_onwers)}}</td>--}}
        {{--<td>{{count($car_valets)}}</td>--}}
        {{--<td>{{ count($franchisees)}}</td>--}}
        </tr>
        </tbody>
        </table>
        </div>
        <div class="card-action">
        <a href="#">View Incubatees</a>
        </div>
        </div>
        </div>
    </div>

@endsection
