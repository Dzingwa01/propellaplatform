@extends('layouts.admin-layout')

@section('content')

    <div class="row" style="margin-top:2em;">
        <h4 class="center">Dashboard</h4>
        <div class="col s12 m4">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title" style="font-weight: bolder">Users</span>
                    <p style="font-weight: bolder">{{'Total Users - '.count($users)}}</p>
                    <table>
                        <thead>
                        <tr>
                            <th>Incubatees</th>
                            <th>Partners</th>
                            <th>Admin</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{count($incubatees)}}</td>
                            <td>0</td>
                            <td>2</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-action">
                    <a href="{{url('users')}}">View Users</a>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title" style="font-weight: bolder">ICT</span>
                    <p style="font-weight: bolder">{{'Total ICT Incubatees - '.$ict_count}}</p>
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
                            <td>{{$ict_stage_1}}</td>
                            <td>{{$ict_stage_2}}</td>
                            <td>{{ $ict_stage_3}}</td>
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
                    <p style="font-weight: bolder">{{'Total Industrial Incubatees - '.$ind_count}}</p>
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
                            <td>{{$ind_stage_1}}</td>
                            <td>{{$ind_stage_2}}</td>
                            <td>{{ $ind_stage_3}}</td>
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
