@extends('layouts.app')

@section('content')
    <link rel="stylesheet" type="text/css" href="/css/About/AboutMain.css"/>
    <!--About Top Section: Image-->

    <div class="parallax-container">
        <h4 id="AboutTopSectionHeader">Future Thinking, Today</h4>
        <div class="parallax"><img src="/images/About/10LP About Us.jpg"></div>
    </div>
    <!--About Second Section-->
    <div class="section " id="AboutSecondSection">
        <div id="AboutSecondSectionContent">
            <div class="row">
                <div class="col m4" style="margin-top:2em;">
                    <h4 id="AboutSecondSectionHeaderOne"> Our Vision </h4>
                    <p class="second-section-paragraph">
                        To be a Smart, High-Tech manufacturing
                        and ICT incubator for the technology needed by Smart Cities around the world.
                    </p>
                </div>
                <div class="col m4" style="margin-top:2em;">
                    <h4 id="AboutSecondSectionHeaderTwo"> Our Mission </h4>
                    <p class="second-section-paragraph">
                        To support the successful development and sustainability of new innovation-
                        based businesses.
                    </p>
                </div>
                <div class="col m4" style="margin-top:2em;">
                    <h4 id="AboutSecondSectionHeaderThree"> Our Goal </h4>
                    <p class="second-section-paragraph">
                        To be the first choice for the commercialisation of smart products and services
                        in our targeted sectors.
                    </p>
                </div>
            </div>

            <div class="row" id="AboutFourthSection">
                <div class="col m4" style="margin-top:2em;">
                    <div class="btn" id="AboutFourthSectionBoxDivRowOneColOne">
                        <h3 class="BoxDivHeader">What We Do</h3>
                    </div>
                </div>
                <div class="col m4" style="margin-top:2em;">
                    <div class="btn" id="AboutFourthSectionBoxDivRowOneColTwo">
                        <h3 class="BoxDivHeader">Our People</h3>
                    </div>
                </div>
                <div class="col m4" style="margin-top:2em;">
                    <div class="btn" id="AboutFourthSectionBoxDivRowOneColThree">
                        <h3 class="BoxDivHeader">Our Partners</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col m4" style="margin-top:2em;">
                    <div class="btn" id="AboutFourthSectionBoxDivRowTwoColOne">
                        <h3 class="BoxDivHeader">Partnering with<br/> Propella</h3>
                    </div>
                </div>
                <div class="col m4" style="margin-top:2em;">
                    <div class="btn" id="AboutFourthSectionBoxDivRowTwoColTwo">
                        <h3 class="BoxDivHeader">Who We Incubate</h3>
                    </div>
                </div>
                <div class="col m4" style="margin-top:2em;">
                    <div class="btn" id="AboutFourthSectionBoxDivRowTwoColThree">
                        <h3 class="BoxDivHeader">How to participate</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--About Third Section-->
    <div class="section">
    </div>
    <div class="parallax-container" id="AboutThirdSection">

        <div class="parallax"><img style="max-width: 80%" src="/images/About/WHAT WE DO.jpg"></div>
    </div>

    <div class="row" id="WhatWeDoSection">
        <div class="col m4">
            <div class="row CircleRow" id="PropellaBtn">
                <h5 class="ButtonHeader">Propella</h5>
            </div>
            <br/>
            <div class="row CircleRow" id="LocationBtn">
                <h5 class="ButtonHeader">Location &amp; infrastructure</h5>
            </div>
            <br/>
            <div class="row CircleRow" id="PreIncubationBtn">
                <h5 class="ButtonHeader">Pre-incubation Support</h5>
            </div>
            <br/>
            <div class="row CircleRow" id="IncubationBtn">
                <h5 class="ButtonHeader">Incubation Services</h5>
            </div>
            <br/>
            <div class="row CircleRow" id="AccelerationBtn">
                <h5 class="ButtonHeader">Acceleration</h5>
            </div>
        </div>

        <div class="" id="AboutFifthSectionPropellaInfo">
            <div class="col s12 m8">
                <div class="card">
                    <div class="card-content ">
                        <span class="card-title">Propella</span>
                        <p>Propella is one of the first business hubs in South Africa to be fully geared for Business
                            4.0.</p>
                        <br/>
                        <p>
                            Exciting new IT and advanced manufacturing businesses share the same building to encourage
                            cooperation between innovators in both sectors.
                        </p>
                        <br/>
                        <p>
                            Support for the development of technologies for Smart Cities come through a partnership
                            between
                            Engeli Enterprise Development (EDD), a private sector business support company and
                            Innovolve, the
                            wholly owned commercialisation company of Nelson Mandela University (NMU).
                        </p>
                        <br/>
                        <p>
                            Propella helps commercialise the research and development being conducted at the NMU,
                            as well as other technology entrepreneurs who either approach Propella for support of who
                            are identified
                            by Propella.
                        </p>
                        <br/>
                        <p>
                            Prospective icnubatees go through a rigorous selection process to qualify for access to the
                            Propella
                            and its support services.
                        </p>
                        <br/>
                        <p>Once they are selected Propella facilitators assist with mentoring and the evaluation of
                            business
                            concepts.</p>
                    </div>

                </div>
            </div>

        </div>

        <div id="AboutFifthSectionLocationInfo" class="col m8" hidden>
            <div class="card">
                <div class="card-content ">
                    <span class="card-title">Location &amp; Infrastructure</span>

                    <p>Propella's modern hive of innovation, overlooking the Port Elizabeth harbour offers:</p>
                    <br/>
                    <ul class="left-align">
                        <li><i class="tiny material-icons">info</i>Office and light manufacturing space to allow for
                            growth.
                        </li>
                        <li><i class="tiny material-icons">info</i>Flexible rental options.</li>
                        <li><i class="tiny material-icons">info</i>Security - of both equipment and intellectual
                            property.
                        </li>
                        <li><i class="tiny material-icons">info</i>Central location - close to NMU campuses and the
                            commercial
                            and main industrial areas of Nelson Mandela Bay.
                        </li>
                        <li><i class="tiny material-icons">info</i>High speed data connectivity - a "supersonic" 79mbps
                            data
                            link.
                        </li>
                        <li>
                            <i class="tiny material-icons">info</i>In-house 3D printing, machining, robotic welding,
                            general
                            purpose workshop and other
                            equipment suitable for prototyping and production of low-volume batches.
                        </li>
                    </ul>
                </div>

            </div>
        </div>


        <div id="AboutFifthSectionPreIncubationInfo" class="col m8" hidden>
            <div class="card ">
                <div class="card-content">
                    <span class="card-title">Pre-incubation support (Restricted to ICT)</span>
                    <p>
                        All successful businesses and innovations start with an idea. Propella helps to
                        ignite the ideas to become actions through its pre-incubation support for innovators
                        who have a concept with potential, but need guidance on the first steps to
                        commercialisation.
                    </p>
                    <br/>
                    <p>
                        Propella's doors are open to inventors or entrepreneurs who are in that
                        all-important and delicate concept stage – the one where there is an idea but no
                        plan.
                    </p>
                    <br/>
                    <p>
                        Propella's doors are open to inventors or entrepreneurs who are in that
                        all-important and delicate concept stage – the one where there is an idea but no plan.
                    </p>
                    <ul>
                        <li><i class="tiny material-icons">info</i>Desktop feasibility study of the proposed business
                            idea
                        </li>
                        <li><i class="tiny material-icons">info</i>Market assessment, feasibility planning and business
                            planning
                        </li>
                        <li><i class="tiny material-icons">info</i>Entrepreneurial assessment and feedback session</li>
                        <li><i class="tiny material-icons">info</i>Counselling and pre-incubation business advice</li>
                        <li><i class="tiny material-icons">info</i>Specific business start-up training to support the
                            fledgling
                            enterprise
                        </li>
                        <li><i class="tiny material-icons">info</i>Coaching to guide them through proof of concept and
                            business
                            model canvas
                        </li>
                    </ul>
                    <br/>
                    <p>Entrepreneurs will be ready for selection for the next phase if they have:</p>
                    <ul>
                        <li><i class="tiny material-icons">info</i>Completed the business model canvas</li>
                        {{--@*--}}
                        {{--<li><i class="tiny material-icons">info</i>Completed the entrepreneurial assessment and identified the--}}
                        {{--weaknesses on which they need to work--}}
                        {{--</li>--}}
                        {{--<li><i class="tiny material-icons">info</i>Attended all of the prescribed business skills training--}}
                        {{--programmes.--}}
                        {{--</li>--}}
                        {{--*@--}}
                    </ul>
                </div>

            </div>

        </div>

        <div id="AboutFifthSectionIncubationInfo" class="col m8" hidden>

            <div class="card">
                <div class="card-content">
                    <span class="card-title">Incubation Services</span>
                    <p>
                        Propella measures its success by the number of companies which have been
                        commercialised – in other words, they have left the building as sustainable
                        businesses with both a product and a market. Of course, when pioneering new
                        products, processes and businesses, not all incubatees make it to market.
                        That failure is analysed to ensure that the lessons learned contribute to the success
                        of another new venture. By the way, we also celebrate failure, since it’s part of a
                        successful journey. Look out for our FUN2FAIL events.
                    </p>
                    <br/>
                    <p><b>Propella provides four types of support:</b></p>
                    <ul>
                        <li><i class="tiny material-icons">info</i>Technology and/or technology platform development -
                            prototyping testing and preparation for scale
                        </li>
                        <li><i class="tiny material-icons">info</i>Business Support – Guidance to establish and run a
                            business
                        </li>
                        <li><i class="tiny material-icons">info</i>Customer – Customer insights and access to markets
                            within the
                            growing Propella network
                        </li>
                        <li><i class="tiny material-icons">info</i>Entrepreneur - Working on growing entrepreneurial
                            ability in
                            order to grow the business.
                        </li>
                    </ul>
                    <br/>
                    <p><b>Business toolbox</b></p>
                    <p>
                        Engeli Enterprise Development, which manages Propella, has developed a
                        range of entrepreneurial, business and technology tools for the various facets
                        of the incubation/acceleration stages. These have been customised for Propella.
                    </p>
                    <p>
                        Entrepreneurs accepted by Propella sign a development contract based on an
                        assessment of the company using the diagnostic tools. The contract includes
                        development milestones and commitments from the entrepreneur, as well as
                        the anticipated date on which the enterprise will move into its own premises –
                        making space for the next potentially disruptive new business.
                    </p>
                </div>

            </div>

        </div>

        <div id="AboutFifthSectionAccelerationInfo" class="col m8" hidden>
            <div class="card">
                <div class="card-content ">
                    <span class="card-title">Acceleration</span>
                    <p>
                        Once they have successfully proved they have a viable business concept during
                        the incubation programme Propella is able to provide support to the owners
                        and managers of companies ready to growth their business to the next level.
                    </p>
                    <p>The main offerings include:</p>
                    <p><b>Funding</b></p>
                    <p>
                        Few financial institutions and venture capitalists in South Africa provide funding for new
                        technology or
                        early stage venture capital, as they are seen as high risk.
                    </p>
                    <p>
                        Successful Propella incubatees who have established the potential to develop a successful and
                        sustainable business are assisted in applying to various funders.
                    </p>
                    <p>
                        Partnerships with other venture capital funds (Engeli Section 12J VCC and others) and financial
                        institutions are among the options for start-up debt and equity funding.
                    </p>
                    <p>
                        Some start-ups may also qualify for BBBEE enterprise development funding grants or loans.
                    </p>
                    <p>
                        Propella also facilitates the creation of partnerships (like JV’s) with established companies.
                    </p>
                    <br/>
                    <p><b>Extended tenure</b></p>
                    <p>
                        Space permitting, Propella may offer companies ready for commercialisation
                        the opportunity to continue making use of the Propella facilities and support
                        structure.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="AboutFifthSectionFirstImage" class="section">

    </div>

    <div id="OurPeopleSection" class="row left-align">
        <div class="col m4">
            <div class="row CircleRow" id="BoardnGuestsBtn">
                <h5 class="ButtonHeader">Board &amp; Guests</h5>
            </div>
            <br/>
            <div class="row CircleRow" id="ManagementBtn">
                <h5 class="ButtonHeader">Management</h5>
            </div>
            <br/>
            <div class="row CircleRow" id="StaffBtn">
                <h5 class="ButtonHeader">Staff</h5>
            </div>
            <br/>
            <div class="row CircleRow" id="MentorsBtn">
                <h5 class="ButtonHeader">Mentors</h5>
            </div>
        </div>


        <div id="AboutFifthSectionBoardnGuestInfo" class="col m8">
            <div class="card">
                <div class="card-title">
                    <h5>Board & Guests</h5>
                </div>
                <div class="card-content">
                    <div class="carousel">
                        <a class="carousel-item" href="#one!">
                            <div class="card">
                                <div class="card-image">
                                    <img src="/images/ProfilePictures/NoProfilePic.jpg">
                                </div>
                                <div class="card-content">
                                    <p>Prof Andrew Leitch<br/>
                                        Nelson Mandela University</p>
                                </div>
                            </div>
                        </a>
                        <a class="carousel-item" href="#two!">
                            <div class="card">
                                <div class="card-image">
                                    <img src="/images/ProfilePictures/NoProfilePic.jpg">
                                </div>
                                <div class="card-content">
                                    <p>Johan Wasserman</p>
                                    <p>Nelson Mandela University</p>
                                </div>
                            </div>

                        </a>
                        <a class="carousel-item" href="#three!">

                            <div class="card">
                                <div class="card-image">
                                    <img src="/images/ProfilePictures/NoProfilePic.jpg">
                                </div>
                                <div class="card-content">
                                    <p>Wayne Oosthuizen</p>
                                    <p>Engeli Enterprise Development</p>
                                </div>
                            </div>

                        </a>
                        <a class="carousel-item" href="#four!">

                            <div class="card">
                                <div class="card-image">
                                    <img src="/images/ProfilePictures/NoProfilePic.jpg">
                                </div>
                                <div class="card-content">
                                    <p>Dr Ricardo Dames</p>
                                    <p>Engeli Enterprise Development</p>
                                </div>
                            </div>

                        </a>
                        <a class="carousel-item" href="#five!">

                            <div class="card">
                                <div class="card-image">
                                    <img src="/images/ProfilePictures/NoProfilePic.jpg">
                                </div>
                                <div class="card-content">
                                    <p>Greg Wood</p>
                                    <p>Isuzu Motors South Africa</p>
                                </div>
                            </div>

                        </a>
                        <a class="carousel-item" href="#six!">

                            <div class="card">
                                <div class="card-image">
                                    <img src="/images/ProfilePictures/NoProfilePic.jpg">
                                </div>
                                <div class="card-content">
                                    <p>Stuart Carliell</p>
                                    <p>BASF</p>
                                </div>
                            </div>

                        </a>

                        <a class="carousel-item" href="#seven!">

                            <div class="card">
                                <div class="card-image">
                                    <img src="/images/ProfilePictures/NoProfilePic.jpg">
                                </div>
                                <div class="card-content">
                                    <p>Portia Maurice</p>
                                    <p>Telkom</p>
                                </div>
                            </div>

                        </a>

                        <a class="carousel-item" href="#eight!">

                            <div class="card">
                                <div class="card-image">
                                    <img src="/images/ProfilePictures/NoProfilePic.jpg">
                                </div>
                                <div class="card-content">
                                    <p>Dr Nqobile Gumede</p>
                                    <p>Innovation Office, NMU</p>
                                </div>

                            </div>
                        </a>

                        <a class="carousel-item" href="#eight!5u">
                            <div class="card">
                                <div class="card-image">
                                    <img src="/images/ProfilePictures/NoProfilePic.jpg">
                                </div>
                                <div class="card-content">
                                    <p>Barry Wiseman</p>
                                    <p>Engeli Enterprise Development</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>


        <div id="AboutFifthSectionManagementInfo" class="col m8" hidden>
            <h5 style="text-align: center">Management</h5>
            <div class="row">
            <div class="card col m4">
                <div class="card-image">
                    <img src="/images/ProfilePictures/Propella Staff/AnitaSideTest.jpg">
                </div>
                <div class="card-content">
                    <p>Anita Palmer</p>
                    <p>Business Incubator Manager</p>
                </div>
            </div>
            <div class="card col m4">
                <div class="card-image">
                    <img src="/images/ProfilePictures/Propella Staff/GrantSide.JPG">
                </div>
                <div class="card-content">
                    <p>Grant Minnie</p>
                    <p>Senior Industrial Manager</p>
                </div>
            </div>
            <div class="card col m4">
                <div class="card-image">
                    <img src="/images/ProfilePictures/Propella Staff/ErrolSide.JPG">
                </div>
                <div class="card-content">
                    <p>Errol Wills</p>
                    <p>Senior ICT Manager</p>
                </div>
            </div>
            </div>

        </div>

        <div id="AboutFifthSectionStaffInfo" class="col m8" hidden>
            <div class="row">
                <div class="card col m4">
                    <div class="card-image">
                        <img src="/images/ProfilePictures/Propella Staff/MaraSide.JPG">
                    </div>
                    <div class="card-content">
                        <p>Mara Jacobs</p>
                        <p>Administrator</p>
                    </div>
                </div>
                <div class="card col m4">
                    <div class="card-image">
                        <img src="/images/ProfilePictures/Propella Staff/ApheleleSide.JPG">
                    </div>
                    <div class="card-content">
                        <p>Aphelele Jonas</p>
                        <p>Marketing &amp; Public Relations</p>
                    </div>
                </div>
                <div class="card col m4">
                    <div class="card-image">
                        <img src="/images/ProfilePictures/Propella Staff/SinazoSide.JPG">
                    </div>
                    <div class="card-content">
                        <p>Sinazo Jack</p>
                        <p>Reception</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card col m4">
                    <div class="card-image">
                        <img src="/images/ProfilePictures/Propella Staff/GwenSide.JPG">
                    </div>
                    <div class="card-content">
                        <p>Gwen Assem</p>
                        <p>Facilities</p>
                    </div>
                </div>
            </div>
        </div>


        <div id="AboutFifthSectionMentorsInfo" class="col m8" hidden>
            <div class="row">
                <div class="card col m4">
                    <div class="card-image">
                        <img src="/images/ProfilePictures/Propella Staff/DarrylSide.JPG">
                    </div>
                    <div class="card-content">
                        <p>Daryl McWilliams</p>
                    </div>
                </div>
                <div class="card col m4">
                    <div class="card-image">
                        <img src="/images/ProfilePictures/Propella Staff/LindaSide.JPG">
                    </div>
                    <div class="card-content">
                        <p>Linda Lawrie</p>
                    </div>
                </div>
                <div class="card col m4">
                    <div class="card-image">
                        <img src="/images/ProfilePictures/NoProfilePic.jpg">
                    </div>
                    <div class="card-content">
                        <p>Jane Stevenson</p>
                    </div>
                </div>
            </div>
            {{--<div class="row">--}}
                {{--<div class="col m3 hoverable" id="DarylImage">--}}
                    {{--<div id="Details">--}}
                        {{--<p>Daryl McWilliams</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col m3 hoverable" id="LindaImage">--}}
                    {{--<div id="Details">--}}
                        {{--<p>Linda Lawrie</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col m3 hoverable" id="JaneImage">--}}
                    {{--<div id="Details">--}}
                        {{--<p>Jane Stevenson</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col m3 hoverable" id="IanImage">--}}
                    {{--<div id="Details">--}}
                        {{--<p>Ian Vermooten</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>

    <div id="AboutFifthSectionSecondImage" class="section">

    </div>

    <div id="OurPartnersSection" class="row left-align">
        <div class="col m4">
            <div class="row CircleRow" id="ShareholdersBtn">
                <h5 class="ButtonHeader">Shareholders</h5>
            </div>
            <br/>
            <div class="row CircleRow" id="FoundingPartnersBtn">
                <h5 class="ButtonHeader">Founding Partners</h5>
            </div>
            <br/>
            <div class="row CircleRow" id="FundingPartnersBtn">
                <h5 class="ButtonHeader">Funding Partners</h5>
            </div>
        </div>


        <div id="AboutFifthSectionShareholdersInfo" class="col m8" >
            <div class="row">
                <div class="col m6" id="EngeliLogo">
                    <a href="www.engeli.co.za"></a>
                </div>

                <div class="col m6" id="InnovoleLogo">
                    <a href="http://innovolve.co.za/"></a>
                </div>
            </div>
        </div>


        <div id="AboutFifthSectionFoundingPartnersInfo" class="col m8" hidden>
            <div class="row">
                <div class="row">
                    <div class="col m6" id="EngeliLogo">
                        <a href="www.engeli.co.za"></a>
                    </div>

                    <div class="col m6" id="InnovoleLogo">
                        <a href="http://innovolve.co.za/"></a>
                    </div>
                </div>
                <div class="row">
                    <div class="row col m6" id="IDCLogo">
                        <a href="https://www.idc.co.za/"></a>
                    </div>
                    {{--<div class="col m2"></div>--}}
                    <div class="col m6" id="NMULogo">
                        <a href="https://www.mandela.ac.za"></a>
                    </div>
                </div>

            </div>
        </div>


        <div id="AboutFifthSectionFundingPartnersInfo" class="col m8" hidden>
            <div class="row">
                <div class="col m6" id="BCXLogo">
                    <a href="https://www.bcx.co.za/"></a>
                </div>

                <div class="col m6" id="IsuzuLogo">
                    <a href="https://www.isuzu.co.za/"></a>
                </div>
            </div>
            <div class="row">
                <div class="col m6" id="AlgoaFMLogo">
                    <a href="https://www.algoafm.co.za/"></a>
                </div>

                <div class="col m6" id="BoomTownLogo">
                    <a href="https://www.boomtown.agency/"></a>
                </div>
            </div>
            <div class="row">
                <div class="col m6" id="BASFLogo">
                    <a href="https://www.basf.com/za/en.html/"></a>
                </div>
            </div>
        </div>
    </div>

    <div id="AboutPageBuilding">

    </div>
    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.parallax');
            var instances = M.Parallax.init(elems, []);
        });
        var options = {
            duration: 200,
            padding: 0,
            numVisible: 4
        }
        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.carousel');
            var instances = M.Carousel.init(elems, options);
        });
        $(document).ready(function () {
            //What We Do div click
            $('#AboutFourthSectionBoxDivRowOneColOne').on('click', function () {
//                alert("Hello");
                location.href = '#WhatWeDoSection';
            });

            //Our People div click
            $('#AboutFourthSectionBoxDivRowOneColTwo').on('click', function () {
                location.href = '#OurPeopleSection';
            });

            //Our Partners div click
            $('#AboutFourthSectionBoxDivRowOneColThree').on('click', function () {
                location.href = '#OurPartnersSection';
            });

            //Partnering with Propella
            $('#AboutFourthSectionBoxDivRowTwoColOne').on('click', function () {
                location.href = "/Home/Partners";
            });

            //Who we incubate
            $('#AboutFourthSectionBoxDivRowTwoColTwo').on('click', function () {
                location.href = "/Home/Categories";
            });

            //How to participate
            $('#AboutFourthSectionBoxDivRowTwoColThree').on('click', function () {
                location.href = "/Identity/Account/Register";
            });

            //Propella button Click
            $('#PropellaBtn').on('click', function () {
//                alert("hello");
                $('#AboutFifthSectionPropellaInfo').show();
                $('#AboutFifthSectionLocationInfo').hide();
                $('#AboutFifthSectionPreIncubationInfo').hide();
                $('#AboutFifthSectionIncubationInfo').hide();
                $('#AboutFifthSectionAccelerationInfo').hide();
            });

            //Location button click
            $('#LocationBtn').on('click', function () {
                $('#AboutFifthSectionLocationInfo').show();
                $('#AboutFifthSectionPropellaInfo').hide();
                $('#AboutFifthSectionPreIncubationInfo').hide();
                $('#AboutFifthSectionIncubationInfo').hide();
                $('#AboutFifthSectionAccelerationInfo').hide();
            });

            //PreIncubation Button Click
            $('#PreIncubationBtn').on('click', function () {
                $('#AboutFifthSectionPreIncubationInfo').show();
                $('#AboutFifthSectionLocationInfo').hide();
                $('#AboutFifthSectionPropellaInfo').hide();
                $('#AboutFifthSectionIncubationInfo').hide();
                $('#AboutFifthSectionAccelerationInfo').hide();
            });

            //Incubation button click
            $('#IncubationBtn').on('click', function () {
                $('#AboutFifthSectionIncubationInfo').show();
                $('#AboutFifthSectionPreIncubationInfo').hide();
                $('#AboutFifthSectionLocationInfo').hide();
                $('#AboutFifthSectionPropellaInfo').hide();
                $('#AboutFifthSectionAccelerationInfo').hide();
            });

            //Acceleration button click
            $('#AccelerationBtn').on('click', function () {
                $('#AboutFifthSectionAccelerationInfo').show();
                $('#AboutFifthSectionIncubationInfo').hide();
                $('#AboutFifthSectionPreIncubationInfo').hide();
                $('#AboutFifthSectionLocationInfo').hide();
                $('#AboutFifthSectionPropellaInfo').hide();
            });

            //Board & Guest button click
            $('#BoardnGuestsBtn').on('click', function () {
                $('#AboutFifthSectionBoardnGuestInfo').show();
                $('#AboutFifthSectionManagementInfo').hide();
                $('#AboutFifthSectionStaffInfo').hide();
                $('#AboutFifthSectionMentorsInfo').hide();
            });

            //Management button click
            $('#ManagementBtn').on('click', function () {
                $('#AboutFifthSectionManagementInfo').show();
                $('#AboutFifthSectionBoardnGuestInfo').hide();
                $('#AboutFifthSectionStaffInfo').hide();
                $('#AboutFifthSectionMentorsInfo').hide();
            });

            //Staff button click
            $('#StaffBtn').on('click', function () {
                $('#AboutFifthSectionStaffInfo').show();
                $('#AboutFifthSectionBoardnGuestInfo').hide();
                $('#AboutFifthSectionManagementInfo').hide();
                $('#AboutFifthSectionMentorsInfo').hide();
            });

            //Mentors button click
            $('#MentorsBtn').on('click', function () {
                $('#AboutFifthSectionMentorsInfo').show();
                $('#AboutFifthSectionBoardnGuestInfo').hide();
                $('#AboutFifthSectionManagementInfo').hide();
                $('#AboutFifthSectionStaffInfo').hide();
            });

            //Shareholders button click
            $('#ShareholdersBtn').on('click', function () {
                $('#AboutFifthSectionShareholdersInfo').show();
                $('#AboutFifthSectionFoundingPartnersInfo').hide();
                $("#AboutFifthSectionFundingPartnersInfo").hide();
            });

            //Founding Partners button click
            $('#FoundingPartnersBtn').on('click', function () {
                $('#AboutFifthSectionFoundingPartnersInfo').show();
                $('#AboutFifthSectionShareholdersInfo').hide();
                $("#AboutFifthSectionFundingPartnersInfo").hide();
            });

            //Funding Partners button click
            $('#FundingPartnersBtn').on('click', function () {
                $("#AboutFifthSectionFundingPartnersInfo").show();
                $('#AboutFifthSectionShareholdersInfo').hide();
                $('#AboutFifthSectionFoundingPartnersInfo').hide();
            });
        });
    </script>

@endsection