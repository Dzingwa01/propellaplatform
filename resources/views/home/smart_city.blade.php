@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="/css/SmartCity1/main.css" />

<div id="SmartCityImage" class="center">
    <h2 id="SmartHeading">SMART CITY</h2>
</div>
<div class="section center-align" id="AboutSection">
    <div id="AboutSectionContent">
        <div class="row">
            <div class="col m4 left-align">
                <h4 id="SmartH1" align="center">ABOUT SMART CITY</h4>
                <p class="SmartP1" align="center">
                    Cities and towns have to get smart to manage a combination of influx from urban areas and natural population growth in order to ensure that residents enjoy an increasing quality of life.
                </p>
                <h4 id="SmartH2" align="center">MISSION</h4>
                <p class="SmartP2" align="center">
                    Our mission as a smart, hi-tech incubator is to support the successful development and sustainability of innovation as the first choice for the
                    commercialisation of smart products and services for Smart Cities and Smart towns.
                </p>
            </div>
            <br />
            <br />
            <div class="col m8 center-align">
                <div class="row">
                    <a class="waves-effect waves-light  btn-large smartCityBtn hoverable" id="BusinessButton"><i class="material-icons right"></i><h5 style="padding-top:50px;">Smart Business</h5></a>
                    <a class="waves-effect waves-light white btn-large smartCityBtn hoverable" id="BuildingButton"><i class="material-icons right"></i><h5 style="padding-top:50px;color:black;">Smart BUILDING</h5></a>
                    <a class="waves-effect waves-light  btn-large smartCityBtn hoverable" id="CommunityButton"><i class="material-icons right"></i><h5 style="padding-top:50px;">Smart Community</h5></a>
                </div>
                <div class="row">
                    <a class="waves-effect waves-light white btn-large smartCityBtn hoverable" id="EducationButton"> <i class="material-icons right"></i><h5 style="padding-top:50px;color:black;">Smart Education</h5></a>
                    <a class="waves-effect waves-light  btn-large smartCityBtn hoverable" id="EnviromentButton"><i class="material-icons right"></i><h5 style="padding-top:50px;">Smart Enviroment</h5></a>
                    <a class="waves-effect waves-light  btn-large smartCityBtn hoverable" id="GovernanceButton"><i class="material-icons right"></i><h5 style="padding-top:50px;">Smart Governance</h5></a>
                </div>
                <div class="row">
                    <a class="waves-effect waves-light  btn-large smartCityBtn hoverable" id="HealthCareButton"><i class="material-icons right"></i><h5 style="padding-top:50px;">Smart Healthcare</h5></a>
                    <a class="waves-effect waves-light white btn-large smartCityBtn hoverable" id="InfrastrucureButton"><i class="material-icons right"></i><h5 style="padding-top:50px;color:black;">Smart Infrastructure</h5></a>
                    <a class="waves-effect waves-light btn-large smartCityBtn hoverable" id="MobilityButton"><i class="material-icons right"></i><h5 style="padding-top:50px;">Smart Mobility</h5></a>
                </div>
            </div>

        </div>
    </div>
</div>
<br />

<div class="row" id="BusinessRow">
    <div id="SmartCityImage2">

    </div>
    <div class="row RowMargins">

        <br />
        <br />


        <div class="col s12 m3">
            <div class="card blue darken-4">
                <div class="card-content white-text hoverable">
                    <span class="card-title"><b>SMART BUSINESS</b></span>
                </div>
            </div>
        </div>
        <div class="col s12 m9">
            <div class="card white darken-1">
                <div class="card-content black-text hoverable">
                    <p>
                        Investment is attracted by the ease of doing business and the quality of life of the people working in the company. Propella supports the development of both industrial and IT products which help businesses to take full advantage of the benefits of being situated in a Smart City or town.
                    </p>
                </div>
            </div>
        </div>


        <div class="row">
            {{--@foreach (var applicationProcess in Model)--}}
                {{--{--}}
                {{--<div class="col s12 m3">--}}
                    {{--<div class="card hoverable RowCards">--}}
                        {{--<div class="" style="background-color:green; height: 90px;">--}}
                            {{--<span class="card-title"></span>--}}
                        {{--</div>--}}
                        {{--<div class="card-content">--}}
                            {{--<span> @applicationProcess.BusinessIdea </span>--}}
                        {{--</div>--}}
                        {{--<div class="card-action">--}}
                            {{--<a href="#">B2B</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--}--}}
        </div>
    </div>
</div>
<a style="margin-left:50%" class="black-text" href="#AboutSection"><i class="material-icons large scroll-icon">arrow_drop_up_circle</i></a>



<div class="row" id="BuildingRow">
    <div id="BuildImage">

    </div>
    <div class="RowMargins">
        <br />
        <br />
        <div class="col s12 m3">
            <div class="card white darken-1">
                <div class="card-content black-text hoverable">
                    <span class="card-title"><b>SMART BUILDING</b></span>
                    <br />
                </div>
            </div>
        </div>
        <div class="col s12 m9">
            <div class="card white darken-1">
                <div class="card-content black-text hoverable">
                    <p>
                        Propella has a Smart Building test bed on site. Solutions are developed for buildings of all types and sizes, from small government (RDP) houses to multi-storey complexes.
                        A smart building intelligently integrates different physical management systems to ensure they work together efficiently. Smart building management systems can reduce water and energy use, minimise waste and improve security for residents and visitors.
                    </p>
                </div>
            </div>
        </div>



        <div class="row">
            {{--@foreach (var applicationProcess in Model)--}}
                {{--{--}}
                {{--<div class="col s12 m3">--}}
                    {{--<div class="card hoverable RowCards">--}}
                        {{--<div class="" style="background-color:deepskyblue; height: 90px;">--}}
                            {{--<span class="card-title"></span>--}}
                        {{--</div>--}}
                        {{--<div class="card-content">--}}
                            {{--<span> @applicationProcess.BusinessIdea </span>--}}
                        {{--</div>--}}
                        {{--<div class="card-action">--}}
                            {{--<a href="#">B2B</a>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--}--}}
        </div>
    </div>
</div>
<a style="margin-left:50%" class="black-text" href="#AboutSection"><i class="material-icons large scroll-icon">arrow_drop_up_circle</i></a>


<div class="" id="CommunityRow">
    <div id="CommuImage">

    </div>
    <br />

    <div class="RowMargins">
        <div class="row">
        <div class="col s12 m3">
            <div class="card green darken-3">
                <div class="card-content white-text hoverable">
                    <span class="card-title"><b>SMART COMMUNITY</b></span>
                    <br />
                    <br />
                </div>
            </div>
        </div>
        <div class="col s12 m9">
            <div class="card white darken-3">
                <div class="card-content black-text hoverable">
                    <p>
                        Technology has the power to enable municipalities to be more responsive to citizen needs in order to enhance the quality of life of residents. Propella follows a citizen-centric approach to the development of applications. Citizens expect transparent, accessible and responsive services. A survey by Accenture found that citizens increasingly want a personalised digital experience, smartphone access and integration with social media. More specifically, citizens want smartphone apps that provide convenient access to services and information
                    </p>
                </div>
            </div>
        </div></div>

        <div class="row">
            {{--@foreach (var applicationProcess in Model)--}}
                {{--{--}}
                {{--<div class="col s12 m3">--}}
                    {{--<div class="card hoverable RowCards">--}}
                        {{--<div class="" style="background-color:grey; height: 90px;">--}}
                            {{--<span class="card-title"></span>--}}
                        {{--</div>--}}
                        {{--<div class="card-content">--}}
                            {{--<span> @applicationProcess.BusinessIdea </span>--}}
                        {{--</div>--}}
                        {{--<div class="card-action">--}}
                            {{--<a href="#">B2B</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--}--}}
        </div>
    </div>
</div>
<a style="margin-left:50%" class="black-text" href="#AboutSection"><i class="material-icons large scroll-icon">arrow_drop_up_circle</i></a>



<div class="row" id="EducationRow">
    <div id="SmartEduImage">
    </div>

    <div class="RowMargins">
        <br />
        <div class="col s12 m3">
            <div class="card white darken-3">
                <div class="card-content black-text hoverable">
                    <span class="card-title"><b>SMART EDUCATION</b></span>
                </div>
            </div>
        </div>
        <div class="col s12 m9">
            <div class="card white darken-1">
                <div class="card-content black-text hoverable">
                    <p>
                        Smart Cities enable virtual learning and augmented reality to transform the way residents of all ages and from all walks of life learn. Through its partnership with the Nelson Mandela University Propella can connect entrepreneurs with internationally recognised education experts.
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            {{--@foreach (var applicationProcess in Model)--}}
                {{--{--}}
                {{--<div class="col s12 m3">--}}
                    {{--<div class="card hoverable RowCards">--}}
                        {{--<div class="" style="background-color:deepskyblue; height: 90px;">--}}
                            {{--<span class="card-title"></span>--}}
                        {{--</div>--}}
                        {{--<div class="card-content">--}}
                            {{--<span> @applicationProcess.BusinessIdea </span>--}}
                        {{--</div>--}}
                        {{--<div class="card-action">--}}
                            {{--<a href="#">B2B</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--}--}}
        </div>
    </div>
</div>
<a style="margin-left:50%" class="black-text" href="#AboutSection"><i class="material-icons large scroll-icon">arrow_drop_up_circle</i></a>



<div class="" id="EnviromentRow">
    <div id="EnviroImage">
    </div>

    <div class="RowMargins">
        <br />
        <div class="row">
            <div class="col s12 m3">
                <div class="card green darken-3">
                    <div class="card-content white-text hoverable">
                        <span class="card-title"><b>SMART ENVIRONMENT</b></span>
                    </div>
                </div>
            </div>
            <div class="col s12 m9">
                <div class="card white darken-1">
                    <div class="card-content black-text hoverable">
                        <p>
                            Propella takes a holistic approach to developing the solutions needed to make cities and towns more sustainable.
                            <br />
                            <br />
                            <br />

                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m3">
                <div class="card green darken-3">
                    <div class="card-content white-text hoverable">
                        <span class="card-title"><b>Waste management</b></span>
                    </div>
                </div>
            </div>
            <div class="col s12 m9">
                <div class="card white darken-1">
                    <div class="card-content black-text hoverable">
                        <p>
                            Smart waste management systems reduce waste and sort waste at source. Propella supports the development of Smart methods for
                            the proper handling of waste. This includes the conversion of waste into a resource for closed - loop economies.
                            <br />
                            <br />
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col s12 m3">
                <div class="card green darken-3">
                    <div class="card-content white-text hoverable">
                        <span class="card-title"><b>Water management</b></span>
                    </div>
                </div>
            </div>
            <div class="col s12 m9">
                <div class="card white darken-1">
                    <div class="card-content black-text hoverable">
                        <p>
                            Almost all towns and cities around the world face challenges with the supply of potable water. Propella supports the development and monetisation of Smart water management systems that use digital technology to help save water, reduce costs and increase the reliability and transparency of water distribution.
                            <br />
                            <br />
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m3">
                <div class="card green darken-3">
                    <div class="card-content white-text hoverable">
                        <span class="card-title"><b>Smart energy</b> </span>
                    </div>
                </div>
            </div>
            <div class="col s12 m9">
                <div class="card white darken-1">
                    <div class="card-content black-text hoverable">
                        <p>
                            Propella is supporting the development of smart energy innovations, such as distributed renewable generation, microgrids, smart grid technologies, energy storage, automated demand response, virtual power plants and demand - side innovations such as electric vehicles and smart appliances.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<a style="margin-left:50%" class="black-text" href="#AboutSection"><i class="material-icons large scroll-icon">arrow_drop_up_circle</i></a>


<div class="row" id="GovernanceRow">
    <div id="GovImage">
    </div>
    <br />
    <div class="RowMargins">
        <div class="col s12 m3">
            <div class="card blue darken-4">
                <div class="card-content white-text hoverable">
                    <span class="card-title"><b>SMART GOVERNANCE</b></span>
                </div>
            </div>
        </div>
        <div class="col s12 m9">
            <div class="card white darken-1">
                <div class="card-content black-text hoverable">
                    <p>
                        For developers of new technologies that improve urban governance through better use of information and provide seamless communication between the municipality and the residents
                    </p>
                </div>
            </div>
        </div>


        <div class="row">
            {{--@foreach (var applicationProcess in Model)--}}
                {{--{--}}
                {{--<div class="col s12 m3">--}}
                    {{--<div class="card hoverable RowCards">--}}
                        {{--<div class="" style="background-color:green; height: 90px;">--}}
                            {{--<span class="card-title"></span>--}}
                        {{--</div>--}}
                        {{--<div class="card-content">--}}
                            {{--<span> @applicationProcess.BusinessIdea </span>--}}
                        {{--</div>--}}
                        {{--<div class="card-action">--}}
                            {{--<a href="#">B2B</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--}--}}
        </div>

    </div>
</div>
<a style="margin-left:50%" class="black-text" href="#AboutSection"><i class="material-icons large scroll-icon">arrow_drop_up_circle</i></a>


<div class="" id="HealthCareRow">
    <div id="HealthImage">

    </div>
    <br />
    <div class="RowMargins">
        <div class="row">
        <div class="col s12 m3">
            <div class="card blue darken-3">
                <div class="card-content white-text hoverable">
                    <span class="card-title"><b>SMART HEALTHCARE</b></span>
                    <br />
                    <br />
                </div>
            </div>
        </div>
        <div class="col s12 m9">
            <div class="card white darken-1">
                <div class="card-content black-text hoverable">
                    <p>
                        Globally, the health sector is in transition as it seeks to address a myriad of challenges—from an aging population and rising costs to outdated infrastructure and incompatible technologies and protocols. Managers of public health facilities in Smart Cities need ICT services that enable the provision of intelligent, data-driven medical services in order to make optimum use of the funds available. Propella also supports the development of Smart medical devices that help with prevention and treatment.
                    </p>
                </div>
            </div>
        </div>
        </div>
        <div class="row">
            {{--@foreach (var applicationProcess in Model)--}}
                {{--{--}}
                {{--<div class="col s12 m3">--}}
                    {{--<div class="card hoverable RowCards">--}}
                        {{--<div class="" style="background-color:grey; height: 90px;">--}}
                            {{--<span class="card-title"></span>--}}
                        {{--</div>--}}
                        {{--<div class="card-content">--}}
                            {{--<span> @applicationProcess.BusinessIdea </span>--}}
                        {{--</div>--}}
                        {{--<div class="card-action">--}}
                            {{--<a href="#">B2B</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--}--}}
        </div>
    </div>
</div>
<a style="margin-left:50%" class="black-text" href="#AboutSection"><i class="material-icons large scroll-icon">arrow_drop_up_circle</i></a>


<div class="row" id="InfrastructureRow">
    <div id="InfraImage">

    </div>
    <br />
    <div class="RowMargins">
        <div class="col s12 m3">
            <div class="card white darken-3">
                <div class="card-content black-text hoverable">
                    <span class="card-title"><b>SMART INFRASTRUCTURE</b></span>
                    <br />
                </div>
            </div>
        </div>
        <div class="col s12 m9">
            <div class="card white darken-1">
                <div class="card-content black-text hoverable">
                    <p>
                        Smart infrastructure provides the literal foundation for smart cities. The core underlying characteristic of the elements that make up a Smart City (such as governance, mobility, buildings, environmental management) is that they are connected and that they generate data. Propella helps innovators to explore ways of using this data intelligently to ensure the optimal use of resources and improve performance.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<a style="margin-left:50%" class="black-text" href="#AboutSection"><i class="material-icons large scroll-icon">arrow_drop_up_circle</i></a>


<div class="row" id="MobilityRow">
    <div id="MobiImage">

    </div>
    <br />
    <div class="RowMargins">
        <div class="col s12 m3">
            <div class="card green darken-4">
                <div class="card-content white-text hoverable">
                    <span class="card-title"><b>SMART MOBILITY</b></span>
                </div>
            </div>
        </div>
        <div class="col s12 m9">
            <div class="card white darken-1">
                <div class="card-content black-text hoverable">
                    <p>
                        Smart mobility solutions help reduce congestion and foster faster, greener and cheaper transportation options. They include individual mobility systems such as bicycle sharing, ride sharing (or carpooling), vehicle sharing and on - demand transportation.
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            {{--@foreach (var applicationProcess in Model)--}}
                {{--{--}}
                {{--<div class="col s12 m3">--}}
                    {{--<div class="card hoverable RowCards">--}}
                        {{--<div class="" style="background-color:green; height: 90px;">--}}
                            {{--<span class="card-title"></span>--}}
                        {{--</div>--}}
                        {{--<div class="card-content">--}}
                            {{--<span> @applicationProcess.BusinessIdea </span>--}}
                        {{--</div>--}}
                        {{--<div class="card-action">--}}
                            {{--<a href="#">B2B</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--}--}}
        </div>
    </div>
</div>
<a style="margin-left:50%" class="black-text" href="#AboutSection"><i class="material-icons large scroll-icon">arrow_drop_up_circle</i></a>



<div id="LastImage">

</div>


<script>
    $(document).ready(function () {
        $('#BusinessButton').on('click', function () {
            location.href = "#BusinessRow";
        });

    });

    $(document).ready(function () {
        $('#BuildingButton').on('click', function () {
            location.href = "#BuildingRow";
        });

    });

    $(document).ready(function () {
        $('#CommunityButton').on('click', function () {
            location.href = "#CommunityRow";
        });

    });

    $(document).ready(function () {
        $('#EducationButton').on('click', function () {
            location.href = "#EducationRow";
        });

    });

    $(document).ready(function () {
        $('#EnviromentButton').on('click', function () {
            location.href = "#EnviromentRow";
        });

    });

    $(document).ready(function () {
        $('#GovernanceButton').on('click', function () {
            location.href = "#GovernanceRow";
        });

    });

    $(document).ready(function () {
        $('#HealthCareButton').on('click', function () {
            location.href = "#HealthCareRow";
        });

    });

    $(document).ready(function () {
        $('#InfrastrucureButton').on('click', function () {
            location.href = "#InfrastructureRow";
        });

    });

    $(document).ready(function () {
        $('#MobilityButton').on('click', function () {
            location.href = "#MobilityRow";
        });

    });
</script>

@endsection