@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="/css/SmartCity1/main.css" />
<div class="programpage container-fluid" id="Mobileprogrampage">
    <div class="section standard-top-section">
        <div class="row">
            <div class="parallax-container" id="SmartCityImage">
                <div class="parallax">
                    <img src="/images/SmartCityImages/plain.jpg" />
                </div>
                <h1 class="standard-section-headers" style="padding-left:15%; color:white;">Smart City</h1>
            </div>
        </div>
    </div>

    {{--@* SmartCity About Section *@--}}
    <div class="section center-align standard-section-with-margins" id="AboutSection">
        <div id="AboutSectionContent">
            <div class="row">
                <h4 id="SmartH1" align="center">ABOUT SMART CITY</h4>
                <p class="SmartP1" align="center">
                    Cities and towns have to get smart to manage a combination of influx from urban areas and natural population growth in order to ensure that residents enjoy an increasing quality of life.
                </p>
                <h4 id="SmartH2" align="center">MISSION</h4>
                <p class="SmartP2" align="center">
                    Our mission as a smart, hi-tech incubator is to support the successful development and sustainability of innovation as the first choice for the
                    commercialisation of smart products and services for Smart Cities and Smart towns.
                </p>
                <br />
                <br />
                <div class="row">
                    <div class=" standard-blocks col s6 BusinessButton">
                        <h3 class="standard-block-headers">Smart Business</h3>
                    </div>
                    <div class="standard-blocks col s6 BuildingButton">
                        <h6 class="standard-block-headers">Smart BUILDING</h6>
                    </div>
                    <div class=" standard-blocks col s6 CommunityButton">
                        <h3 class="standard-block-headers">Smart Community</h3>
                    </div>
                    <div class=" standard-blocks col s6 EducationButton">
                        <h3 class="standard-block-headers">Smart Education</h3>
                    </div>
                    <div class=" standard-blocks col s6 EnviromentButton">
                        <h3 class="standard-block-headers">Smart Enviroment</h3>
                    </div>
                    <div class=" standard-blocks col s6 GovernanceButton">
                        <h3 class="standard-block-headers">Smart Governance</h3>
                    </div>
                    <div class=" standard-blocks col s6 HealthCareButton">
                        <h3 class="standard-block-headers">Smart Healthcare</h3>
                    </div>
                    <div class=" standard-blocks col s6 InfrastrucureButton">
                        <h3 class="standard-block-headers">Smart Infrastructure</h3>
                    </div>
                    <div class=" standard-blocks col s6 MobilityButton">
                        <h3 class="standard-block-headers">Smart Mobility</h3>
                    </div>
                    <div class=" standard-blocks col s6 NjeButton">
                        <h3 class="standard-block-headers"></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section standard-top-section">
        <div class="row">
            <div class="parallax-container" id="BusinessRow">
                <div class="parallax">
                    <img src="/images/SmartCityImages/business.jpg" />
                </div>
                <h1 class="standard-section-headers" style="padding-left:11%; color:white;">Smart Business</h1>
            </div>
        </div>
    </div>
    <div class="section center-align standard-section-with-margins " id="BusinessSection">

        <div class="Business">
            <div class="card blue darken-4 center">
                <div class="card-content white-text hoverable">
                    <span class="center card-title" style="font-size:16px"><b>SMART BUSINESS</b></span>
                </div>
            </div>
        </div>
        <div class="white darken-1">
            <div class="standard-paragraphs center-align">
                <p>
                    Investment is attracted by the ease of doing business and the quality of life of the people working in the company. Propella supports the development of both industrial and IT products which help businesses to take full advantage of the benefits of being situated in a Smart City or town.
                </p>
            </div>
        </div>

    </div>
    {{--@*<div class="section center-align standard-top-section " id="Bus1">--}}
        {{--<div class="row" id="Margin">--}}
            {{--@foreach (var incubatee in Model)--}}
                {{--{--}}
                {{--<div class="col s7 m4">--}}
                    {{--<div class="card white hoverable" style="border-radius: 15px;">--}}
                        {{--<div class="circle">--}}
                            {{--<div class="card-content black-text">--}}
                                {{--<div class="user-view" align="left">--}}
                                    {{--<a href="#user"><img class="fullscreen" style="height: 75px;width: 180px;" src="/images/Propella_Logo.jpg"></a>--}}
                                {{--</div>--}}
                                {{--<br />--}}
                                {{--<span class="card-title"> @incubatee.FirstName </span>*@--}}
                                {{--@*<span class="card-title"> @incubatee.Email </span>*@--}}
                                {{--@*<div id="u136_text" class="text ">--}}
                                    {{--<p><span><b>My shopping buscket.</b></span></p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="card-action">--}}
                                {{--<div class="user-view" align="left">--}}
                                    {{--<a href="#user"><img class="circle" style="height: 50px;width: 50px;" src="/images/th (1).jpg"></a>*@--}}
                                    {{--@*<a href="/Home//' + @incubatee.Id'"> View Profile </a>*@--}}
                                    {{--@*<a href="/Home/Founders/" style="color:blue">VIEW PROFILE</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--}--}}
        {{--</div>--}}
    {{--</div>*@--}}

    <a style="margin-left:40%" class="black-text" href="#AboutSection"><i class="material-icons large scroll-icon">arrow_drop_up_circle</i></a>


    <div class="section standard-top-section">
        <div class="row">
            <div class="parallax-container" id="BuildImage">
                <div class="parallax">
                    <img src="/images/SmartCityImages/building.jpg" />
                </div>
                <h1 class="standard-section-headers" style="padding-left:11%; color:white;">Smart Building</h1>
            </div>
        </div>
    </div>
    <div class="section center-align standard-section-with-margins " id="BuildingRow">

        <div class="Building">
            <div class="card blue darken-3">
                <div class="card-content white-text hoverable">
                    <span class="center card-title" style="font-size:16px"><b>SMART BUILDING</b></span>
                </div>
            </div>
        </div>
        <div class="white darken-3">
            <div class="standard-paragraphs center-align">
                <p>
                    Propella has a Smart Building test bed on site. Solutions are developed for buildings of all types and sizes, from small government (RDP) houses to multi-storey complexes.
                    A smart building intelligently integrates different physical management systems to ensure they work together efficiently. Smart building management systems can reduce water and energy use, minimise waste and improve security for residents and visitors.
                </p>
            </div>
        </div>

        {{--@*<div id="BuildDb">--}}
            {{--<div class="row" id="Margin">--}}
                {{--@foreach (var incubatee in Model)--}}
                    {{--{--}}
                    {{--<div class="col s7 m4">--}}
                        {{--<div class="card white hoverable" style="border-radius: 15px;">--}}
                            {{--<div class="circle">--}}
                                {{--<div class="card-content black-text">--}}
                                    {{--<div class="user-view" align="left">--}}
                                        {{--<a href="#user"><img class="fullscreen" style="height: 75px;width: 180px;" src="/images/Propella_Logo.jpg"></a>--}}
                                    {{--</div>--}}
                                    {{--<br />--}}
                                    {{--<span class="card-title"> @incubatee.FirstName </span>*@--}}
                                    {{--@*<span class="card-title"> @incubatee.Email </span>*@--}}
                                    {{--@*<div id="u136_text" class="text ">--}}
                                        {{--<p><span><b>My shopping buscket.</b></span></p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="card-action">--}}
                                    {{--<div class="user-view" align="left">--}}
                                        {{--<a href="#user"><img class="circle" style="height: 50px;width: 50px;" src="/images/th (1).jpg"></a>*@--}}
                                        {{--@*<a href="/Home//' + @incubatee.Id'"> View Profile </a>*@--}}
                                        {{--@*<a href="/Home/Founders/" style="color:blue">VIEW PROFILE</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--}--}}
            {{--</div>--}}
        {{--</div>*@--}}
    </div>

    <a style="margin-left:40%" class="black-text" href="#AboutSection"><i class="material-icons large scroll-icon">arrow_drop_up_circle</i></a>


    <div class="section standard-top-section">
        <div class="row">
            <div class="parallax-container" id="CommuImage">
                <div class="parallax">
                    <img src="/images/SmartCityImages/community.jpg" />
                </div>
                <h1 class="standard-section-headers" style="padding-left:11%; color:white;">Smart Community</h1>
            </div>
        </div>
    </div>
    <div class="section center-align standard-section-with-margins " id="SmartCommunity">
        <div class="Community">
            <div class="card blue darken-3">
                <div class="card-content white-text hoverable">
                    <span class="center card-title" style="font-size:16px"><b>SMART COMMUNITY</b></span>
                </div>
            </div>
        </div>
    </div>
    <div class="white darken-3 standard-section-with-margins">

        <div class="standard-paragraphs center-align">
            <p>
                Technology has the power to enable municipalities to be more responsive to citizen needs in order to enhance the quality of life of residents.Propella follows
                a citizen-centric approach to the development of applications. Citizens expect transparent, accessible and responsive services.
                A survey by Accenture found that citizens increasingly want a personalised digital experience, smartphone access and integration with social media.
                More specifically, citizens want smartphone apps that provide convenient access to services and information
            </p>
        </div>

    </div>

    {{--@*<div id="Commu">--}}
        {{--<div class="row" id="Margin">--}}
            {{--@foreach (var incubatee in Model)--}}
                {{--{--}}
                {{--<div class="col s7 m4">--}}
                    {{--<div class="card white hoverable" style="border-radius: 15px;">--}}
                        {{--<div class="circle">--}}
                            {{--<div class="card-content black-text">--}}
                                {{--<div class="user-view" align="left">--}}
                                    {{--<a href="#user"><img class="fullscreen" style="height: 75px;width: 180px;" src="/images/Propella_Logo.jpg"></a>--}}
                                {{--</div>--}}
                                {{--<br />--}}
                                {{--<span class="card-title"> @incubatee.FirstName </span>*@--}}
                                {{--@*<span class="card-title"> @incubatee.Email </span>*@--}}
                                {{--@*<div id="u136_text" class="text ">--}}
                                    {{--<p><span><b>My shopping buscket.</b></span></p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="card-action">--}}
                                {{--<div class="user-view" align="left">--}}
                                    {{--<a href="#user"><img class="circle" style="height: 50px;width: 50px;" src="/images/th (1).jpg"></a>*@--}}
                                    {{--@*<a href="/Home//' + @incubatee.Id'"> View Profile </a>*@--}}
                                    {{--@*<a href="/Home/Founders/" style="color:blue">VIEW PROFILE</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--}--}}
        {{--</div>--}}
    {{--</div>*@--}}

    <a style="margin-left:40%" class="black-text" href="#AboutSection"><i class="material-icons large scroll-icon">arrow_drop_up_circle</i></a>

    <div class="section standard-top-section">
        <div class="row">
            <div class="parallax-container" id="SmartEducation">
                <div class="parallax">
                    <img src="/images/SmartCityImages/education.jpg" />
                </div>
                <h1 class="standard-section-headers" style="padding-left:11%; color:white;">Smart Education</h1>
            </div>
        </div>
    </div>
    <div class="section center-align standard-section-with-margins" id="SmartEducationBlock">
        <div class="card blue darken-3">
            <div class="card-content white-text hoverable">
                <span class="center card-title" style="font-size:16px"><b>SMART EDUCATION</b></span>
            </div>
        </div>
    </div>
    <div class="white darken-3 standard-section-with-margins">
        <div class="standard-paragraphs center-align">
            <p>
                Smart Cities enable virtual learning and augmented reality to transform the way residents of all ages and from all walks of life learn. Through its partnership with the Nelson Mandela University Propella can connect entrepreneurs with internationally recognised education experts.
            </p>
        </div>
    </div>

    {{--@*<div id="Edu">--}}
        {{--<div class="row" id="Margin">--}}
            {{--@foreach (var incubatee in Model)--}}
                {{--{--}}
                {{--<div class="col s7 m4">--}}
                    {{--<div class="card white hoverable" style="border-radius: 15px;">--}}
                        {{--<div class="circle">--}}
                            {{--<div class="card-content black-text">--}}
                                {{--<div class="user-view" align="left">--}}
                                    {{--<a href="#user"><img class="fullscreen" style="height: 75px;width: 180px;" src="/images/Propella_Logo.jpg"></a>--}}
                                {{--</div>--}}
                                {{--<br />--}}
                                {{--<span class="card-title"> @incubatee.FirstName </span>*@--}}
                                {{--@*<span class="card-title"> @incubatee.Email </span>*@--}}
                                {{--@*<div id="u136_text" class="text ">--}}
                                    {{--<p><span><b>My shopping buscket.</b></span></p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="card-action">--}}
                                {{--<div class="user-view" align="left">--}}
                                    {{--<a href="#user"><img class="circle" style="height: 50px;width: 50px;" src="/images/th (1).jpg"></a>*@--}}
                                    {{--@*<a href="/Home//' + @incubatee.Id'"> View Profile </a>*@--}}
                                    {{--@*<a href="/Home/Founders/" style="color:blue">VIEW PROFILE</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--}--}}
        {{--</div>--}}
    {{--</div>*@--}}

    <a style="margin-left:40%" class="black-text" href="#AboutSection"><i class="material-icons large scroll-icon">arrow_drop_up_circle</i></a>



    <div class="section standard-top-section">
        <div class="row">
            <div class="parallax-container" id="EnviroImage">
                <div class="parallax">
                    <img src="/images/SmartCityImages/environment.jpg" />
                </div>
                <h1 class="standard-section-headers" style="padding-left:11%; color:white;">Smart Environment</h1>
            </div>
        </div>
    </div>

    <div class="section center-align standard-section-with-margins" id="SmartEnvinron">
        <div class="card blue darken-3">
            <div class="card-content white-text hoverable">
                <span class="center card-title" style="font-size:16px"><b>SMART ENVIRONMENT</b></span>
            </div>
        </div>
    </div>
    <div class="white darken-3 standard-section-with-margins">
        <div class="standard-paragraphs center-align">
            <p>
                Propella takes a holistic approach to developing the solutions needed to make cities and towns more sustainable.

            </p>
        </div>
    </div>
    <div class="section center-align standard-section-with-margins" id="SmartEducationBlock">
        <div class="card blue darken-3">
            <div class="card-content white-text hoverable">
                <span class="center card-title" style="font-size:16px"><b>WASTE MANAGEMENT</b></span>
            </div>
        </div>
    </div>
    <div class="white darken-3 standard-section-with-margins">
        <div class="standard-paragraphs center-align">
            <p>
                Smart waste management systems reduce waste and sort waste at source. Propella supports the development of Smart methods for
                the proper handling of waste. This includes the conversion of waste into a resource for closed - loop economies.

            </p>
        </div>
    </div>
    <div class="section center-align standard-section-with-margins" id="SmartEducationBlock">
        <div class="card blue darken-3">
            <div class="card-content white-text hoverable">
                <span class="center card-title" style="font-size:16px"><b>WATER MANAGEMENT</b></span>
            </div>
        </div>
    </div>
    <div class="white darken-3 standard-section-with-margins">
        <div class="standard-paragraphs center-align">
            <p>
                Almost all towns and cities around the world face challenges with the supply of potable water. Propella supports the development and monetisation of Smart water management systems that use digital technology to help save water, reduce costs and increase the reliability and transparency of water distribution.

            </p>
        </div>
    </div>
    <div class="section center-align standard-section-with-margins" id="SmartEducationBlock">
        <div class="card blue darken-3">
            <div class="card-content white-text hoverable">
                <span class="center card-title" style="font-size:16px"><b>SMART ENERGY</b></span>
            </div>
        </div>
    </div>
    <div class="white darken-3 standard-section-with-margins">
        <div class="standard-paragraphs center-align">
            <p>
                Propella is supporting the development of smart energy innovations, such as distributed renewable generation, microgrids, smart grid technologies, energy storage, automated demand response, virtual power plants and demand - side innovations such as electric vehicles and smart appliances.
            </p>
        </div>
    </div>

    <a style="margin-left:40%" class="black-text" href="#AboutSection"><i class="material-icons large scroll-icon">arrow_drop_up_circle</i></a>


    <div class="standard-top-section" id="GovImage">

    </div>
    <div class="section center-align standard-section-with-margins" id="SmartEducationBlock">
        <div class="card blue darken-3">
            <div class="card-content white-text hoverable">
                <span class="center card-title" style="font-size:16px"><b>SMART GOVERNANCE</b></span>
            </div>
        </div>
    </div>
    <div class="white darken-3 standard-section-with-margins">
        <div class="standard-paragraphs center-align">
            <p>
                For developers of new technologies that improve urban governance through better use of information and provide seamless communication between the municipality and the residents
            </p>
        </div>
    </div>
    {{--@*<div id="Gov">--}}
        {{--<div class="row" id="Margin">--}}
            {{--@foreach (var incubatee in Model)--}}
                {{--{--}}
                {{--<div class="col s7 m4">--}}
                    {{--<div class="card white hoverable" style="border-radius: 15px;">--}}
                        {{--<div class="circle">--}}
                            {{--<div class="card-content black-text">--}}
                                {{--<div class="user-view" align="left">--}}
                                    {{--<a href="#user"><img class="fullscreen" style="height: 75px;width: 180px;" src="/images/Propella_Logo.jpg"></a>--}}
                                {{--</div>--}}
                                {{--<br />--}}
                                {{--<span class="card-title"> @incubatee.FirstName </span>*@--}}
                                {{--@*<span class="card-title"> @incubatee.Email </span>*@--}}
                                {{--@*<div id="u136_text" class="text ">--}}
                                    {{--<p><span><b>My shopping buscket.</b></span></p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="card-action">--}}
                                {{--<div class="user-view" align="left">--}}
                                    {{--<a href="#user"><img class="circle" style="height: 50px;width: 50px;" src="/images/th (1).jpg"></a>*@--}}
                                    {{--@*<a href="/Home//' + @incubatee.Id'"> View Profile </a>*@--}}
                                    {{--@*<a href="/Home/Founders/" style="color:blue">VIEW PROFILE</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--}--}}
        {{--</div>--}}
    {{--</div>*@--}}

    <a style="margin-left:40%" class="black-text" href="#AboutSection"><i class="material-icons large scroll-icon">arrow_drop_up_circle</i></a>



    <div class="section standard-top-section">
        <div class="row">
            <div class="parallax-container" id="HealthImage">
                <div class="parallax">
                    <img src="/images/SmartCityImages/health 1.jpg" />
                </div>
                <h1 class="standard-section-headers" style="padding-left:11%; color:white;">Smart Healthcare</h1>
            </div>
        </div>
    </div>
    <div class="section center-align standard-section-with-margins" id="HealthCareRow">
        <div class="card blue darken-3">
            <div class="card-content white-text hoverable">
                <span class="center card-title" style="font-size:16px"><b>SMART HEALTHCARE</b></span>
            </div>
        </div>
    </div>
    <div class="white darken-3 standard-section-with-margins">
        <div class="standard-paragraphs center-align">
            <p>
                Globally, the health sector is in transition as it seeks to address a myriad of challenges—from an aging population and rising costs to outdated infrastructure and incompatible technologies and protocols.
                Managers of public health facilities in Smart Cities need ICT services that enable the provision of intelligent,
                data-driven medical services in order to make optimum use of the funds available.
                Propella also supports the development of Smart medical devices that help with prevention and treatment.
            </p>
        </div>
    </div>
    {{--@*<div id="Health">--}}
        {{--<div class="row" id="Margin">--}}
            {{--@foreach (var incubatee in Model)--}}
                {{--{--}}
                {{--<div class="col s7 m4">--}}
                    {{--<div class="card white hoverable" style="border-radius: 15px;">--}}
                        {{--<div class="circle">--}}
                            {{--<div class="card-content black-text">--}}
                                {{--<div class="user-view" align="left">--}}
                                    {{--<a href="#user"><img class="fullscreen" style="height: 75px;width: 180px;" src="/images/Propella_Logo.jpg"></a>--}}
                                {{--</div>--}}
                                {{--<br />--}}
                                {{--<span class="card-title"> @incubatee.FirstName </span>*@--}}
                                {{--@*<span class="card-title"> @incubatee.Email </span>*@--}}
                                {{--@*<div id="u136_text" class="text ">--}}
                                    {{--<p><span><b>My shopping buscket.</b></span></p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="card-action">--}}
                                {{--<div class="user-view" align="left">--}}
                                    {{--<a href="#user"><img class="circle" style="height: 50px;width: 50px;" src="/images/th (1).jpg"></a>*@--}}
                                    {{--@*<a href="/Home//' + @incubatee.Id'"> View Profile </a>*@--}}
                                    {{--@*<a href="/Home/Founders/" style="color:blue">VIEW PROFILE</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--}--}}
        {{--</div>--}}
    {{--</div>*@--}}

    <a style="margin-left:40%" class="black-text" href="#AboutSection"><i class="material-icons large scroll-icon">arrow_drop_up_circle</i></a>



    <div class="section standard-top-section">
        <div class="row">
            <div class="parallax-container" id="InfraImage">
                <div class="parallax">
                    <img src="/images/SmartCityImages/infrastructure.jpg" />
                </div>
                <h1 class="standard-section-headers" style="padding-left:11%; color:white;">Smart Infrastructure</h1>
            </div>
        </div>
    </div>
    <div class="section center-align standard-section-with-margins" id="Infrastructure">
        <div class="card blue darken-3">
            <div class="card-content white-text hoverable">
                <span class="center card-title" style="font-size:16px"><b>SMART INFRASTRUCTURE</b></span>
            </div>
        </div>
    </div>
    <div class="white darken-3 standard-section-with-margins">
        <div class="standard-paragraphs center-align">
            <p>
                Smart infrastructure provides the literal foundation for smart cities. The core underlying characteristic of the elements that make up a Smart City (such as governance, mobility, buildings, environmental management) is that they are connected and that they generate data. Propella helps innovators to explore ways of using this data intelligently to ensure the optimal use of resources and improve performance.
            </p>
        </div>
    </div>

    <a style="margin-left:40%" class="black-text" href="#AboutSection"><i class="material-icons large scroll-icon">arrow_drop_up_circle</i></a>



    <div class="section standard-top-section">
        <div class="row">
            <div class="parallax-container" id="MobiImage">
                <div class="parallax">
                    <img src="/images/SmartCityImages/mobility.jpg" />
                </div>
                <h1 class="standard-section-headers" style="padding-left:11%; color:white;">Smart Mobility</h1>
            </div>
        </div>
    </div>
    <div class="section center-align standard-section-with-margins" id="SmartMob">
        <div class="card blue darken-3">
            <div class="card-content white-text hoverable">
                <span class="center card-title" style="font-size:16px"><b>SMART MOBILITY</b></span>
            </div>
        </div>
    </div>
    <div class="white darken-3 standard-section-with-margins">
        <div class="standard-paragraphs center-align">
            <p>
                Smart mobility solutions help reduce congestion and foster faster, greener and cheaper transportation options. They include individual mobility systems such as bicycle sharing, ride sharing (or carpooling), vehicle sharing and on - demand transportation.
            </p>
        </div>
    </div>
    {{--@*<div id="Mobi">--}}
        {{--<div class="row" id="Margin">--}}
            {{--@foreach (var incubatee in Model)--}}
                {{--{--}}
                {{--<div class="col s7 m4">--}}
                    {{--<div class="card white hoverable" style="border-radius: 15px;">--}}
                        {{--<div class="circle">--}}
                            {{--<div class="card-content black-text">--}}
                                {{--<div class="user-view" align="left">--}}
                                    {{--<a href="#user"><img class="fullscreen" style="height: 75px;width: 180px;" src="/images/Propella_Logo.jpg"></a>--}}
                                {{--</div>--}}
                                {{--<br />--}}
                                {{--<span class="card-title"> @incubatee.FirstName </span>*@--}}
                                {{--@*<span class="card-title"> @incubatee.Email </span>*@--}}
                                {{--@*<div id="u136_text" class="text ">--}}
                                    {{--<p><span><b>My shopping buscket.</b></span></p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="card-action">--}}
                                {{--<div class="user-view" align="left">--}}
                                    {{--<a href="#user"><img class="circle" style="height: 50px;width: 50px;" src="/images/th (1).jpg"></a>*@--}}
                                    {{--@*<a href="/Home//' + @incubatee.Id'"> View Profile </a>*@--}}
                                    {{--@*<a href="/Home/Founders/" style="color:blue">VIEW PROFILE</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--}--}}
        {{--</div>--}}
    {{--</div>*@--}}

    <a style="margin-left:40%" class="black-text" href="#AboutSection"><i class="material-icons large scroll-icon">arrow_drop_up_circle</i></a>
</div>


<div class="programpage container-fluid" id="Desktopprogrampage">

    <div class="section standard-top-section">
        <div class="row">
            <div class="parallax-container" id="SmartCityImage">
                <div class="parallax">
                    <img src="/images/SmartCityImages/plain.jpg" />
                </div>
                <h1 class="standard-section-headers" style="color: white;">Smart City</h1>
            </div>
        </div>
    </div>



    {{--@* SmartCity About Section *@--}}
    <div class="section center-align standard-section-with-margins" id="AboutSection">
        <div id="AboutSectionContent">
            <div class="row">
                <div class="col m4 left-align">
                    <h4 id="standard-section-headers" align="center">ABOUT SMART CITY</h4>
                    <p class="standard-paragraphs" align="center">
                        Cities and towns have to get smart to manage a combination of influx from urban areas and natural population growth in order to ensure that residents enjoy an increasing quality of life.
                    </p>
                    <h4 id="standard-section-headers" align="center">MISSION</h4>
                    <p class="standard-paragraphs" align="center">
                        Our mission as a smart, hi-tech incubator is to support the successful development and sustainability of innovation as the first choice for the
                        commercialisation of smart products and services for Smart Cities and Smart towns.
                    </p>
                </div>
                <div class="col m2"></div>
                <div class="col m6 center-align">
                    <div class="row">
                        <div class=" standard-blocks col m4 BusinessButton">
                            <h3 class="standard-block-headers">Smart Business</h3>
                        </div>
                        <div class="standard-blocks col m4 BuildingButton">
                            <h6 class="standard-block-headers">Smart Building</h6>
                        </div>
                        <div class=" standard-blocks col m4 CommunityButton">
                            <h3 class="standard-block-headers">Smart Community</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" standard-blocks col m4 EducationButton">
                            <h3 class="standard-block-headers">Smart Education</h3>
                        </div>
                        <div class=" standard-blocks col m4 EnviromentButton">
                            <h3 class="standard-block-headers">Smart Enviroment</h3>
                        </div>
                        <div class=" standard-blocks col m4 GovernanceButton">
                            <h3 class="standard-block-headers">Smart Governance</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" standard-blocks col m4 HealthCareButton">
                            <h3 class="standard-block-headers">Smart Healthcare</h3>
                        </div>
                        <div class=" standard-blocks col m4 InfrastrucureButton">
                            <h3 class="standard-block-headers">Smart Infrastructure</h3>
                        </div>
                        <div class=" standard-blocks col m4 MobilityButton">
                            <h3 class="standard-block-headers">Smart Mobility</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--@* Business Section *@--}}
    <div class="section center-align standard-top-section " >
        <div class="row">
            <div class="parallax-container" id="BusinessRow">
                <div class="parallax">
                    <img src="/images/SmartCityImages/business.jpg" />
                </div>
                <h1 class="standard-section-headers" style="color: white;">Smart Business</h1>

            </div>
        </div>
    </div>
    <div class="section center-align standard-section-with-margins " id="BusinessSection">
        <div class="row">
            <div class="col s12 m3" id="Bus">
                <div class="card blue darken-4">
                    <div class="card-content section center-align  hoverable">
                        <span class="card-title" style="font-size:16px"><b>SMART BUSINESS</b></span>
                    </div>
                </div>
            </div>
            <div class="col s12 m9">
                <div class="card white darken-1">
                    <div class="card-content standard-paragraphs hoverable">
                        <p>
                            Investment is attracted by the ease of doing business and the quality of life of the people working in the company. Propella supports the development of both industrial and IT products which help businesses to take full advantage of the benefits of being situated in a Smart City or town.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--@*<div id="Bus1">--}}
        {{--<div class="row" id="Margin">--}}
            {{--@foreach (var incubatee in Model)--}}
                {{--{--}}
                {{--<div class="col s7 m4">--}}
                    {{--<div class="card white hoverable" style="border-radius: 15px;">--}}
                        {{--<div class="circle">--}}
                            {{--<div class="card-content black-text">--}}
                                {{--<div class="user-view" align="left">--}}
                                    {{--<a href="#user"><img class="fullscreen" style="height: 75px;width: 180px;" src="/images/Propella_Logo.jpg"></a>--}}
                                {{--</div>--}}
                                {{--<br />--}}
                                {{--<span class="card-title"> @incubatee.FirstName </span>*@--}}
                                {{--@*<span class="card-title"> @incubatee.Email </span>*@--}}
                                {{--@*<div id="u136_text" class="text ">--}}
                                    {{--<p><span><b>My shopping buscket.</b></span></p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="card-action">--}}
                                {{--<div class="user-view" align="left">--}}
                                    {{--<a href="#user"><img class="circle" style="height: 50px;width: 50px;" src="/images/th (1).jpg"></a>*@--}}
                                    {{--@*<a href="/Home//' + @incubatee.Id'"> View Profile </a>*@--}}
                                    {{--@*<a href="/Home/Founders/" style="color:blue">VIEW PROFILE</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--}--}}
        {{--</div>--}}
    {{--</div>*@--}}

    <a style="margin-left:50%" class="black-text" href="#AboutSection"><i class="material-icons large scroll-icon">arrow_drop_up_circle</i></a>

    {{--@* Building Section *@--}}
    <div class="section center-align standard-top-section">
        <div class="section standard-top-section">
            <div class="row">
                <div class="parallax-container" id="BuildImage">
                    <div class="parallax">
                        <img src="/images/SmartCityImages/building.jpg" />
                    </div>
                    <h1 class="standard-section-headers" style="color: white;">Smart Building</h1>

                </div>
            </div>
        </div>
    </div>

    <div class="section center-align standard-section-with-margins " id="BuildingRow">
        <div class="row">
            <div class="col s12 m3" id="Buildn">
                <div class="card white darken-1">
                    <div class="card-content black-text hoverable" style="height: 140px;">
                        <span class="card-title" style="font-size:16px"><b>SMART BUILDING</b></span>

                    </div>
                </div>
            </div>
            <div class="col s12 m9">
                <div class="card white darken-1">
                    <div class="card-content standard-paragraphs hoverable">
                        <p>
                            Propella has a Smart Building test bed on site. Solutions are developed for buildings of all types and sizes, from small government (RDP) houses to multi-storey complexes.
                            A smart building intelligently integrates different physical management systems to ensure they work together efficiently. Smart building management systems can reduce water and energy use, minimise waste and improve security for residents and visitors.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--@*<div id="Build">--}}
        {{--<div class="row" id="Margin">--}}
            {{--@foreach (var incubatee in Model)--}}
                {{--{--}}
                {{--<div class="col s7 m4">--}}
                    {{--<div class="card white hoverable" style="border-radius: 15px;">--}}
                        {{--<div class="circle">--}}
                            {{--<div class="card-content black-text">--}}
                                {{--<div class="user-view" align="left">--}}
                                    {{--<a href="#user"><img class="fullscreen" style="height: 75px;width: 180px;" src="/images/Propella_Logo.jpg"></a>--}}
                                {{--</div>--}}
                                {{--<br />--}}
                                {{--<span class="card-title"> @incubatee.FirstName </span>*@--}}
                                {{--@*<span class="card-title"> @incubatee.Email </span>*@--}}
                                {{--@*<div id="u136_text" class="text ">--}}
                                    {{--<p><span><b>My shopping buscket.</b></span></p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="card-action">--}}
                                {{--<div class="user-view" align="left">--}}
                                    {{--<a href="#user"><img class="circle" style="height: 50px;width: 50px;" src="/images/th (1).jpg"></a>*@--}}
                                    {{--@*<a href="/Home//' + @incubatee.Id'"> View Profile </a>*@--}}
                                    {{--@*<a href="/Home/Founders/" style="color:blue">VIEW PROFILE</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--}--}}
        {{--</div>--}}
    {{--</div>*@--}}

    <a style="margin-left:50%" class="black-text" href="#AboutSection"><i class="material-icons large scroll-icon">arrow_drop_up_circle</i></a>

    {{--@* Community Section *@--}}
    <div class="section center-align standard-top-section" >
        <div class="section standard-top-section">
            <div class="row">
                <div class="parallax-container" id="CommuImage">
                    <div class="parallax">
                        <img src="/images/SmartCityImages/community.jpg" />
                    </div>
                    <h1 class="standard-section-headers" style=" color: white;">Smart Community</h1>

                </div>
            </div>
        </div>
    </div>
    <div class="section center-align standard-section-with-margins " id="Community">
        <div class="row">
            <div class="col s12 m3" id="Commune">
                <div class="card green darken-3">
                    <div class="card-content white-text hoverable" style="height: 168px;">
                        <span class="card-title" style="font-size:16px"><b>SMART COMMUNITY</b></span>

                    </div>
                </div>
            </div>
            <div class="col s12 m9">
                <div class="card white darken-3">
                    <div class="card-content standard-paragraphs hoverable">
                        <p>
                            Technology has the power to enable municipalities to be more responsive to citizen needs in order to enhance the quality of life of residents. Propella follows a citizen-centric approach to the development of applications. Citizens expect transparent, accessible and responsive services. A survey by Accenture found that citizens increasingly want a personalised digital experience, smartphone access and integration with social media. More specifically, citizens want smartphone apps that provide convenient access to services and information
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--@*<div id="Commu">--}}
        {{--<div class="row" id="Margin">--}}
            {{--@foreach (var incubatee in Model)--}}
                {{--{--}}
                {{--<div class="col s7 m4">--}}
                    {{--<div class="card white hoverable" style="border-radius: 15px;">--}}
                        {{--<div class="circle">--}}
                            {{--<div class="card-content black-text">--}}
                                {{--<div class="user-view" align="left">--}}
                                    {{--<a href="#user"><img class="fullscreen" style="height: 75px;width: 180px;" src="/images/Propella_Logo.jpg"></a>--}}
                                {{--</div>--}}
                                {{--<br />--}}
                                {{--<span class="card-title"> @incubatee.FirstName </span>*@--}}
                                {{--@*<span class="card-title"> @incubatee.Email </span>*@--}}
                                {{--@*<div id="u136_text" class="text ">--}}
                                    {{--<p><span><b>My shopping buscket.</b></span></p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="card-action">--}}
                                {{--<div class="user-view" align="left">--}}
                                    {{--<a href="#user"><img class="circle" style="height: 50px;width: 50px;" src="/images/th (1).jpg"></a>*@--}}
                                    {{--@*<a href="/Home//' + @incubatee.Id'"> View Profile </a>*@--}}
                                    {{--@*<a href="/Home/Founders/" style="color:blue">VIEW PROFILE</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--}--}}
        {{--</div>--}}
    {{--</div>*@--}}

    <a style="margin-left:50%" class="black-text" href="#AboutSection"><i class="material-icons large scroll-icon">arrow_drop_up_circle</i></a>

    <div class="section center-align standard-top-section " id="SmartEduImage">
        <div class="section standard-top-section">
            <div class="row">
                <div class="parallax-container" id="SmartEduImage">
                    <div class="parallax">
                        <img src="/images/SmartCityImages/education.jpg" />
                    </div>
                    <h1 class="standard-section-headers" style="color: white;">Smart Education</h1>

                </div>
            </div>
        </div>
    </div>
    <br />
    <div class="section center-align standard-section-with-margins " id="Educate">
        <div class="row">
            <div class="col s12 m2">
                <div class="card white darken-3" id="EducateC">
                    <div class="card-content black-text hoverable">
                        <span class="card-title" style="font-size:16px"><b>SMART EDUCATION</b></span>
                    </div>
                </div>
            </div>
            <div class="col 1"></div>
            <div class="col s12 m8">
                <div class="card white darken-1">
                    <div class="card-content standard-paragraphs hoverable">
                        <p>
                            Smart Cities enable virtual learning and augmented reality to transform the way residents of all ages and from all walks of life learn. Through its partnership with the Nelson Mandela University Propella can connect entrepreneurs with internationally recognised education experts.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--@*<div id="Edu">--}}
        {{--<div class="row" id="Margin">--}}
            {{--@foreach (var incubatee in Model)--}}
                {{--{--}}
                {{--<div class="col s7 m4">--}}
                    {{--<div class="card white hoverable" style="border-radius: 15px;">--}}
                        {{--<div class="circle">--}}
                            {{--<div class="card-content black-text">--}}
                                {{--<div class="user-view" align="left">--}}
                                    {{--<a href="#user"><img class="fullscreen" style="height: 75px;width: 180px;" src="/images/Propella_Logo.jpg"></a>--}}
                                {{--</div>--}}
                                {{--<br />--}}
                                {{--<span class="card-title"> @incubatee.FirstName </span>*@--}}
                                {{--@*<span class="card-title"> @incubatee.Email </span>*@--}}
                                {{--@*<div id="u136_text" class="text ">--}}
                                    {{--<p><span><b>My shopping buscket.</b></span></p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="card-action">--}}
                                {{--<div class="user-view" align="left">--}}
                                    {{--<a href="#user"><img class="circle" style="height: 50px;width: 50px;" src="/images/th (1).jpg"></a>*@--}}
                                    {{--@*<a href="/Home//' + @incubatee.Id'"> View Profile </a>*@--}}
                                    {{--@*<a href="/Home/Founders/" style="color:blue">VIEW PROFILE</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--}--}}
        {{--</div>--}}
    {{--</div>*@--}}

    <a style="margin-left:50%" class="black-text" href="#AboutSection"><i class="material-icons large scroll-icon">arrow_drop_up_circle</i></a>

    {{--@* Envinronment Section *@--}}
    <div class="section center-align standard-top-section ">
        <div class="section standard-top-section">
            <div class="row">
                <div class="parallax-container" id="EnviroImage">
                    <div class="parallax">
                        <img src="/images/SmartCityImages/environment.jpg" />
                    </div>
                    <h1 class="standard-section-headers" style="color: white;">Smart Envinronment</h1>

                </div>
            </div>
        </div>
    </div>
    <div class="section center-align standard-section-with-margins " id="Environ">
        <div class="row">
            <div class="col s12 m3">
                <div class="card green darken-3">
                    <div class="card-content white-text hoverable">
                        <span class="card-title" style="font-size:16px"><b>Smart Environment</b></span>
                    </div>
                </div>
            </div>
            <div class="col s12 m9">
                <div class="card white darken-1">
                    <div class="card-content standard-paragraphs hoverable" style="height:88px;">
                        <p>
                            Propella takes a holistic approach to developing the solutions needed to make cities and towns more sustainable.

                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m3">
                <div class="card green darken-3">
                    <div class="card-content white-text hoverable">
                        <span class="card-title" style="font-size:16px; height: 65px; padding-top:20px;"><b>Waste management</b></span>
                    </div>
                </div>
            </div>
            <div class="col s12 m9">
                <div class="card white darken-1">
                    <div class="card-content section standard-paragraphs hoverable">
                        <p>
                            Smart waste management systems reduce waste and sort waste at source. Propella supports the development of Smart methods for
                            the proper handling of waste. This includes the conversion of waste into a resource for closed - loop economies.

                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m3">
                <div class="card green darken-3">
                    <div class="card-content white-text hoverable">
                        <span class="card-title" style="font-size:16px;"><b>Water management</b></span>
                    </div>
                </div>
            </div>
            <div class="col s12 m9">
                <div class="card white darken-1">
                    <div class="card-contentsection standard-paragraphsstandard-paragraphs hoverable" style="height: 90px;">
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
                        <span class="card-title" style="font-size:16px; height:65px; padding-top:20px;"><b>Smart energy</b> </span>
                    </div>
                </div>
            </div>
            <div class="col s12 m9">
                <div class="card white darken-1">
                    <div class="card-content standard-paragraphs hoverable">
                        <p>
                            Propella is supporting the development of smart energy innovations, such as distributed renewable generation, microgrids, smart grid technologies, energy storage, automated demand response, virtual power plants and demand - side innovations such as electric vehicles and smart appliances.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <a style="margin-left:50%" class="black-text" href="#AboutSection"><i class="material-icons large scroll-icon">arrow_drop_up_circle</i></a>

    {{--@* GovernanceRow Section *@--}}
    <div class="section center-align standard-top-section " id="GovImage">
        <div class="section standard-top-section">
            <div class="row">
                <div class="parallax-container" id="GovImage">
                    <div class="parallax">

                        <img src="/images/SmartCityImages/governance 2.jpg" />
                    </div>
                    <h1 class="standard-section-headers" style="color: white;">Smart Governance</h1>

                </div>
            </div>
        </div>
    </div>
    <br />
    <div class="section center-align standard-section-with-margins " id="GovernanceRow">
        <div class="row">
            <div class="col s12 m3" id="Goven">
                <div class="card blue darken-4">
                    <div class="card-content white-text hoverable">
                        <span class="card-title" style="font-size:16px"><b>SMART GOVERNANCE</b></span>
                    </div>
                </div>
            </div>
            <div class="col s12 m9">
                <div class="card white darken-1">
                    <div class="card-content black-text hoverable" style="height:120px;">
                        <p>
                            For developers of new technologies that improve urban governance through better use of information and provide seamless communication between the municipality and the residents
                        </p>
                    </div>
                </div>
            </div>
        </div>
        {{--@*<div id="Gov">--}}
            {{--<div class="row" id="Margin">--}}
                {{--@foreach (var incubatee in Model)--}}
                    {{--{--}}
                    {{--<div class="col s7 m4">--}}
                        {{--<div class="card white hoverable" style="border-radius: 15px;">--}}
                            {{--<div class="circle">--}}
                                {{--<div class="card-content black-text">--}}
                                    {{--<div class="user-view" align="left">--}}
                                        {{--<a href="#user"><img class="fullscreen" style="height: 75px;width: 180px;" src="/images/Propella_Logo.jpg"></a>--}}
                                    {{--</div>--}}
                                    {{--<br />--}}
                                    {{--<span class="card-title"> @incubatee.FirstName </span>*@--}}
                                    {{--@*<span class="card-title"> @incubatee.Email </span>*@--}}
                                    {{--@*<div id="u136_text" class="text ">--}}
                                        {{--<p><span><b>My shopping buscket.</b></span></p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="card-action">--}}
                                    {{--<div class="user-view" align="left">--}}
                                        {{--<a href="#user"><img class="circle" style="height: 50px;width: 50px;" src="/images/th (1).jpg"></a>*@--}}
                                        {{--@*<a href="/Home//' + @incubatee.Id'"> View Profile </a>*@--}}
                                        {{--@*<a href="/Home/Founders/" style="color:blue">VIEW PROFILE</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--}--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>*@--}}
</div>

<a style="margin-left:50%" class="black-text" href="#AboutSection"><i class="material-icons large scroll-icon">arrow_drop_up_circle</i></a>

{{--@* HealthCare Section *@--}}
<div class="section center-align standard-top-section ">
    <div class="section standard-top-section">
        <div class="row">
            <div class="parallax-container" id="HealthImage">
                <div class="parallax">
                    <img src="/images/SmartCityImages/health 1.jpg" />
                </div>
                <h1 class="standard-section-headers" style="color: white;">Smart Health</h1>

            </div>
        </div>
    </div>
</div>
<div class="section center-align standard-section-with-margins " id="HealthS">
    <div class="row">
        <div class="col s12 m3" id="HealthDiv">
            <div class="card blue darken-3">
                <div class="card-content white-text hoverable" style="height:130px">
                    <span class="card-title" style="font-size:16px"><b>SMART HEALTHCARE</b></span>

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
</div>
{{--@*<div id="Health">--}}
    {{--<div class="row" id="Margin">--}}
        {{--@foreach (var incubatee in Model)--}}
            {{--{--}}
            {{--<div class="col s7 m4">--}}
                {{--<div class="card white hoverable" style="border-radius: 15px;">--}}
                    {{--<div class="circle">--}}
                        {{--<div class="card-content black-text">--}}
                            {{--<div class="user-view" align="left">--}}
                                {{--<a href="#user"><img class="fullscreen" style="height: 75px;width: 180px;" src="/images/Propella_Logo.jpg"></a>--}}
                            {{--</div>--}}
                            {{--<br />--}}
                            {{--<span class="card-title"> @incubatee.FirstName </span>*@--}}
                            {{--@*<span class="card-title"> @incubatee.Email </span>*@--}}
                            {{--@*<div id="u136_text" class="text ">--}}
                                {{--<p><span><b>My shopping buscket.</b></span></p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="card-action">--}}
                            {{--<div class="user-view" align="left">--}}
                                {{--<a href="#user"><img class="circle" style="height: 50px;width: 50px;" src="/images/th (1).jpg"></a>*@--}}
                                {{--@*<a href="/Home//' + @incubatee.Id'"> View Profile </a>*@--}}
                                {{--@*<a href="/Home/Founders/" style="color:blue">VIEW PROFILE</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--}--}}
    {{--</div>--}}
{{--</div>*@--}}

<a style="margin-left:50%" class="black-text" href="#AboutSection"><i class="material-icons large scroll-icon">arrow_drop_up_circle</i></a>

{{--@* Infrastructure Section *@--}}
<div class="section center-align standard-top-section ">
    <div class="section standard-top-section">
        <div class="row">
            <div class="parallax-container" id="InfraImage">
                <div class="parallax">
                    <img src="/images/SmartCityImages/infrastructure.jpg" />
                </div>
                <h1 class="standard-section-headers" style="color: white;">Smart Governance</h1>

            </div>
        </div>
    </div>
</div>
<div class="section center-align standard-section-with-margins " id="InfrastructureRow">
    <div class="row">
        <div class="col s12 m3" id="infra">
            <div class="card white darken-3">
                <div class="card-content black-text hoverable" >
                    <span class="card-title" style="font-size:16px"><b>SMART INFRASTRUCTURE</b></span>

                </div>
            </div>
        </div>
        <div class="col s12 m9">
            <div class="card white darken-1">
                <div class="card-content black-text hoverable" style="height:120px">
                    <p>
                        Smart infrastructure provides the literal foundation for smart cities. The core underlying characteristic of the elements that make up a Smart City (such as governance, mobility, buildings, environmental management) is that they are connected and that they generate data. Propella helps innovators to explore ways of using this data intelligently to ensure the optimal use of resources and improve performance.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<a style="margin-left:50%" class="black-text" href="#AboutSection"><i class="material-icons large scroll-icon">arrow_drop_up_circle</i></a>

{{--@* MobilityRow Section *@--}}
<div class="section center-align standard-top-section ">
    <div class="section standard-top-section">
        <div class="row">
            <div class="parallax-container" id="MobiImage">
                <div class="parallax">
                    <img src="/images/SmartCityImages/mobility.jpg" />
                </div>
                <h1 class="standard-section-headers" style="color: white;">Smart Mobility</h1>

            </div>
        </div>
    </div>
</div>
<div class="section center-align standard-section-with-margins " id="MobilityRow">
    <div class="row">
        <div class="col s12 m3" id="Mob">
            <div class="card green darken-4">
                <div class="card-content white-text hoverable">
                    <span class="card-title" style="font-size:16px"><b>SMART MOBILITY</b></span>
                </div>
            </div>
        </div>
        <div class="col s12 m9">
            <div class="card white darken-1">
                <div class="card-content black-text hoverable" style="height:120px">
                    <p>
                        Smart mobility solutions help reduce congestion and foster faster, greener and cheaper transportation options. They include individual mobility systems such as bicycle sharing, ride sharing (or carpooling), vehicle sharing and on - demand transportation.
                    </p>
                </div>
            </div>
        </div>
    </div>
    {{--@*<div id="Mobi">--}}
        {{--<div class="row" id="Margin">--}}
            {{--@foreach (var incubatee in Model)--}}
                {{--{--}}
                {{--<div class="col s7 m4">--}}
                    {{--<div class="card white hoverable" style="border-radius: 15px;">--}}
                        {{--<div class="circle">--}}
                            {{--<div class="card-content black-text">--}}
                                {{--<div class="user-view" align="left">--}}
                                    {{--<a href="#user"><img class="fullscreen" style="height: 75px;width: 180px;" src="/images/Propella_Logo.jpg"></a>--}}
                                {{--</div>--}}
                                {{--<br />--}}
                                {{--<span class="card-title"> @incubatee.FirstName </span>*@--}}
                                {{--@*<span class="card-title"> @incubatee.Email </span>*@--}}
                                {{--@*<div id="u136_text" class="text ">--}}
                                    {{--<p><span><b>My shopping buscket.</b></span></p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="card-action">--}}
                                {{--<div class="user-view" align="left">--}}
                                    {{--<a href="#user"><img class="circle" style="height: 50px;width: 50px;" src="/images/th (1).jpg"></a>*@--}}
                                    {{--@*<a href="/Home//' + @incubatee.Id'"> View Profile </a>*@--}}
                                    {{--@*<a href="/Home/Founders/" style="color:blue">VIEW PROFILE</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--}--}}
        {{--</div>--}}
    {{--</div>*@--}}

</div>
<a style="margin-left:50%" class="black-text" href="#AboutSection"><i class="material-icons large scroll-icon">arrow_drop_up_circle</i></a>

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