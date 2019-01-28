@extends('layouts.app')

@section('content')
    <link rel="stylesheet" type="text/css" href="/css/Innovators/Innovators.css" />
    <div class="section standard-top-section container-fluid">
        <div class="row">
            <div class="parallax-container" id="InnovatorsTopSection">
                <div class="parallax">
                    <img src="/images/Innovators/LandingImage.jpg" id="InnovatorsTopSectionImage">
                </div>
                <h1 class="standard-section-headers">The Innovators</h1>
            </div>
        </div>
    </div>

    {{--@* Innovators Second Section Desktop *@--}}
    <div class="section standard-section-with-margins" id="InnovatorsSecondSectionDesktop">
        <div class="row">
            <div class="col l4 text-justify">
                <h4 class="standard-header">The Innovators</h4>
                <p class="standard-paragraphs">
                    <b>For innovators:</b> We are the catalyst for your creativity - Propella helps IT and
                    manufacturing innovators and entreprenuers to grow from zero to hero.
                </p>
                <br />
                <a class="btn" href="/Home/Categories">Ventures</a>
            </div>

            <div class="col l2"></div>

            <div class="col l6 center-align">
                <div class="row ">
                    <div class="standard-blocks IdeaBlock col l4">
                        <h5 class="standard-block-headers"> I have an idea, what's next? </h5>
                    </div>

                    <div class="standard-blocks ProgrammesBlock col l4">
                        <h5 class="standard-block-headers"> What programmes are offered? </h5>
                    </div>

                    <div class="standard-blocks IdeaReadyBlock col l4">
                        <h5 class="standard-block-headers"> Is my idea ready to be incubated? </h5>
                    </div>
                </div>
                <div class="row">
                    <div class="standard-blocks FundingOptionsBlock col l4">
                        <h5 class="standard-block-headers"> Are there funding options? </h5>
                    </div>

                    <div class="standard-blocks FAQBlock col l4">
                        <h5 class="standard-block-headers"> Frequently Asked Questions. </h5>
                    </div>

                    <div class="standard-blocks ApplyBlock col l4">
                        <h5 class="standard-block-headers"> How do I apply?  </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section standard-section-with-margins" id="InnovatorsSecondSectionMobile">
        <div class="row text-justify">
            <h4 class="standard-header">The Innovators</h4>
            <p class="standard-paragraphs">
                <b>For innovators:</b> We are the catalyst for your creativity - Propella helps IT and
                manufacturing innovators and entreprenuers to grow from zero to hero.
            </p>
            <br />
            <a href="CurrentVentures">Ventures</a>
        </div>

        <div class="row center-align">
            <div class="row">
                <div class="standard-blocks col s6 IdeaBlock">
                    <h5 class="standard-block-headers"> I have an idea, what's next? </h5>
                </div>

                <div class="standard-blocks col s6 ProgrammesBlock">
                    <h5 class="standard-block-headers"> What programmes are offered? </h5>
                </div>
            </div>

            <div class="row">
                <div class="standard-blocks col s6 IdeaReadyBlock">
                    <h5 class="standard-block-headers"> Is my idea ready to be incubated? </h5>
                </div>

                <div class="standard-blocks col s6 FundingOptionsBlock">
                    <h5 class="standard-block-headers"> Are there funding options? </h5>
                </div>
            </div>

            <div class="row">
                <div class="standard-blocks col s6 FAQBlock">
                    <h5 class="standard-block-headers"> Frequently Asked Questions. </h5>
                </div>

                <div class="standard-blocks col s6 ApplyBlock">
                    <h5 class="standard-block-headers"> How do I apply?  </h5>
                </div>
            </div>
        </div>

    </div>


    <div class="section standard-top-section container-fluid">
        <div class="row">
            <div class="parallax-container" id="InnovatorsThirdSection">
                <div class="parallax">
                    <img src="/images/Innovators/IdeaImage.jpg" id="InnovatorsThirdSectionImage">
                </div>
                <h1 class="standard-section-headers"> So you have an idea? </h1>
            </div>
        </div>
    </div>

    <div class="section standard-section-with-margins" id="InnovatorsThirdSectionDesktop">

        <div class="row center-align">
            <h4 class="standard-header">Congrats! You're in the right place!</h4>
            <p class="standard-paragraphs">Propella can help you to take your product or IT solution to the market.</p>
            <br />
            <p class="standard-paragraphs">
                If your innovation can improve the lives of people living in cities around the world,
                we'd like to engage further but first we need to know a bit more...
            </p>
        </div>

        <div id="IdeaFirstOptionRowDesktop">
            <div class="row">
                <div class="col l4 center-align">
                    <h2 class="standard-header"> What type of idea is it? </h2>
                </div>

                <div class="col l4 ICTBlock">
                    <h5 class="standard-block-headers"> Information Communication Technology? </h5>
                </div>

                <div class="col l4 INDBlock">
                    <h5 class="standard-block-headers"> Industrial? </h5>
                </div>
            </div>
        </div>

        <div id="ICTIdeaFirstOptionRowDesktop" hidden>
            <div class="row">
                <div class="col l3 center-align">
                    <h2 class="standard-header"> How advanced is the idea? </h2>
                </div>

                <div class="col l3 ICTIdeaBlock">
                    <h5 class="standard-block-headers"> I have a Tech idea </h5>
                </div>

                <div class="col l3 ICTDesignBlock">
                    <h5 class="standard-block-headers"> I have a Wire Frame </h5>
                </div>

                <div class="col l3 ICTPrototypeBlock">
                    <h5 class="standard-block-headers"> I have a functioning app, website, platform or device. </h5>
                </div>
            </div>

            <div class="row center-align ICTFirstCancelBlock">
                <h4> Not sure if this is you? </h4>
            </div>
        </div>

        <div id="ICTFinalOptionRowDesktop" hidden>
            <div class="row">
                <div class="col l5 center-align">
                    <img src="/images/Innovators/IdeaImage.jpg" style="width: 100%; height: 40vh;" />
                </div>

                <div class="col l7">
                    <h4>We host FutureMakers. Futured by BCX and you could qualify.</h4>
                    <p class="standard-paragraphs"> Click below to apply. </p>
                    <a href="#">Apply</a>
                </div>
            </div>

            <div class="row center-align ICTSecondCancelBlock">
                <h4> Not sure if this is you? </h4>
            </div>
        </div>

        <div id="INDIdeaFirstOptionRowDesktop" hidden>
            <div class="row">
                <div class="col l3 center-align">
                    <h2 class="standard-header"> How advanced is the idea? </h2>
                </div>

                <div class="col l3 INDIdeaBlock">
                    <h5 class="standard-block-headers"> I have an idea. </h5>
                </div>

                <div class="col l3 INDDesignBlock">
                    <h5 class="standard-block-headers"> I have a design. </h5>
                </div>

                <div class="col l3 INDPrototypeBlock">
                    <h5 class="standard-block-headers"> I have a prototype. </h5>
                </div>
            </div>

            <div class="row center-align INDFirstCancelBlock">
                <h4> Not sure if this is you? </h4>
            </div>
        </div>

        <div id="INDTechIdeaRowDesktop" hidden>
            <div class="row">
                <div class="col l5 center-align">
                    <img src="/images/Innovators/INDIdea.jpg" style="width: 100%; height: 40vh" />
                </div>

                <div class="col l7">
                    <h4>Please keep up the great work!</h4>
                    <p class="standard-paragraphs"> Contact us as soon as you have a prototype.</p>
                </div>
            </div>

            <div class="row center-align INDSecondCancelBlock">
                <h4> Not sure if this is you? </h4>
            </div>
        </div>

        <div id="INDDesignRowDesktop" hidden>
            <div class="row">
                <div class="col l5 center-align">
                    <img src="/images/Innovators/1.2 Ind Design.jpg" style="width: 100%; height: 40vh" />
                </div>

                <div class="col l7">
                    <h4>This is great news!</h4>
                    <p class="standard-paragraphs"> Please give us a call.</p>
                </div>
            </div>

            <div class="row center-align INDSecondCancelBlock">
                <h4> Not sure if this is you? </h4>
            </div>
        </div>

        <div id="INDPrototypeRowDesktop" hidden>
            <div class="row">
                <div class="col l5 center-align">
                    <img src="/images/Innovators/1.3 Ind Prototyype.jpg" style="width: 100%; height: 40vh" />
                </div>

                <div class="col l7">
                    <h4>Awesome!</h4>
                    <p class="standard-paragraphs"> Please apply here.</p>
                    <a href="#">Apply</a>
                </div>
            </div>

            <div class="row center-align INDSecondCancelBlock">
                <h4> Not sure if this is you? </h4>
            </div>
        </div>

    </div>


    <div class="section standard-section-with-margins" id="InnovatorsThirdSectionMobile">
        <div class="row text-justify">
            <h4 class="standard-header">Congrats! You're in the right place!</h4>
            <p class="standard-paragraphs">Propella can help you to take your product or IT solution to the market.</p>
            <br />
            <p class="standard-paragraphs">
                If your innovation can improve the lives of people living in cities around the world,
                we'd like to engage further but first we need to know a bit more...
            </p>
        </div>

        <div id="IdeaFirstOptionRowMobile">
            <div class="row center-align">
                <h2 class="standard-header"> What type of idea is it? </h2>
            </div>

            <div class="row ICTBlock">
                <h5 class="standard-block-headers"> Information Communication Technology? </h5>
            </div>


            <div class="row INDBlock">
                <h5 class="standard-block-headers"> Industrial? </h5>
            </div>
        </div>

        <div id="ICTIdeaFirstOptionRowMobile" hidden>
            <div class="row center-align">
                <h2 class="standard-header"> How advanced is the idea? </h2>
            </div>

            <div class="row ICTIdeaBlock">
                <h5 class="standard-block-headers"> I have a Tech idea </h5>
            </div>

            <div class="row ICTDesignBlock">
                <h5 class="standard-block-headers"> I have a Wire Frame </h5>
            </div>

            <div class="row ICTPrototypeBlock">
                <h5 class="standard-block-headers"> I have a functioning app, website, platform or device. </h5>
            </div>

            <div class="row center-align CancelBlock">
                <h4> Not sure if this is you? </h4>
            </div>
        </div>

        <div id="ICTFinalOptionRowMobile" hidden>
            <div class="row center-align">
                <h2 class="standard-header"> I have a Tech idea! </h2>
            </div>

            <div class="row">
                <h4>We host FutureMakers. Futured by BCX and you could qualify.</h4>
                <p class="standard-paragraphs"> Click below to apply. </p>
                <a href="#">Apply</a>
            </div>

            <div class="row center-align CancelBlock">
                <h4> Not sure if this is you? </h4>
            </div>
        </div>

        <div id="INDIdeaFirstOptionRowMobile" hidden>
            <div class="row center-align">
                <h2 class="standard-header"> How advanced is the idea? </h2>
            </div>

            <div class="row INDIdeaBlock">
                <h5 class="standard-block-headers"> I have an idea. </h5>
            </div>

            <div class="row INDDesignBlock">
                <h5 class="standard-block-headers"> I have a design. </h5>
            </div>

            <div class="row INDPrototypeBlock">
                <h5 class="standard-block-headers"> I have a prototype. </h5>
            </div>

            <div class="row center-align CancelBlock">
                <h4> Not sure if this is you? </h4>
            </div>
        </div>

        <div id="INDTechIdeaRowMobile" hidden>
            <div class="row center-align">
                <h2 class="standard-header"> Just an idea? </h2>
            </div>

            <div class="row">
                <h4>Please keep up the great work!</h4>
                <p class="standard-paragraphs"> Contact us as soon as you have a prototype.</p>
            </div>

            <div class="row center-align CancelBlock">
                <h4> Not sure if this is you? </h4>
            </div>
        </div>

        <div id="INDDesignRowMobile" hidden>
            <div class="row center-align">
                <h2 class="standard-header"> You have a design? </h2>
            </div>

            <div class="row">
                <h4>This is great news!</h4>
                <p class="standard-paragraphs"> Please give us a call.</p>
            </div>

            <div class="row center-align CancelBlock">
                <h4> Not sure if this is you? </h4>
            </div>
        </div>

        <div id="INDPrototypeRowMobile" hidden>
            <div class="row center-align">
                <h2 class="standard-header"> You have a prototype? </h2>
            </div>

            <div class="row">
                <h4>Awesome!</h4>
                <p class="standard-paragraphs"> Please apply here.</p>
                <a href="#">Apply</a>
            </div>

            <div class="row center-align CancelBlock">
                <h4> Not sure if this is you? </h4>
            </div>
        </div>

    </div>

    <div class="section standard-top-section container-fluid">
        <div class="row">
            <div class="parallax-container" id="InnovatorsFourthSection">
                <div class="parallax">
                    <img src="/images/Innovators/Business/business.jpg" id="InnovatorsFourthSectionImage">
                </div>
                <h1 class="standard-section-headers"> Ideas Propella look for... </h1>
            </div>
        </div>
    </div>


    <div id="InnovatorsFourthSectionDesktop" class="section standard-section-with-margins">
        <div class="row">
            <div class="col l6">
                <ul>
                    <li>We ideally work with businesses or business ideas that have been tested in the market and are:</li>
                    <li>Disruptive (SMART, out of the ordinary thinking, unique, innovative)</li>
                    <li>Appropriate</li>
                    <li>Scalable</li>
                    <li>Sustainable</li>
                    <li>Create jobs or have the ability to create jobs</li>
                    <li>Based in Nelson Mandela Bay</li>
                </ul>
            </div>

            <div class="col l6">
                <p>We look into the following sectors : </p>
                <ul>
                    <li>Renewable Energy</li>
                    <li>Energy Efficiency</li>
                    <li>Circular Economy</li>
                    <li>Advanced Manufacturing</li>
                    <li>Maritime</li>
                    <li>Internet of Things (IoT) / Smart City Solutions</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="InnovatorsFourthSectionMobile" class="section standard-section-with-margins">
        <div class="row text-justify">
            <ul>
                <li>We ideally work with businesses or business ideas that have been tested in the market and are:</li>
                <li>Disruptive (SMART, out of the ordinary thinking, unique, innovative)</li>
                <li>Appropriate</li>
                <li>Scalable</li>
                <li>Sustainable</li>
                <li>Create jobs or have the ability to create jobs</li>
                <li>Based in Nelson Mandela Bay</li>
            </ul>
        </div>
        <div class="row">
            <p>We look into the following sectors : </p>
            <ul>
                <li>Renewable Energy</li>
                <li>Energy Efficiency</li>
                <li>Circular Economy</li>
                <li>Advanced Manufacturing</li>
                <li>Maritime</li>
                <li>Internet of Things (IoT) / Smart City Solutions</li>
            </ul>
        </div>
    </div>

    {{--@* Innovators Fifth Section: Image Only *@--}}
    <div class="section standard-top-section container-fluid">
        <div class="row">
            <div class="parallax-container" id="InnovatorsFifthSection">
                <div class="parallax">
                    <img src="/images/Innovators/Programmes.jpg" id="InnovatorsFifthSectionImage">
                </div>
                <h1 class="standard-section-headers"> Programmes </h1>
            </div>
        </div>
    </div>
    
    <div id="InnovatorsFifthSectionDesktop" class="section standard-section-with-margins">
        <div id="ProgrammesFirstRow">
            <div class="row">
                <div class="col l4 center-align">
                    <h4 class="standard-block-headers"> Which programme would you like to know more about? </h4>
                </div>

                <div class="col l4 standard-blocks center-align FuturemakersBlock">
                    <h5 class="standard-block-headers"> FutureMakers Futured by BCX </h5>
                </div>


                <div class="col l4 standard-blocks center-align IndustrialHubBlock">
                    <h5 class="standard-block-headers"> ISUZU Industrial Hub </h5>
                </div>
            </div>
        </div>

        <div id="ProgrammesICTFirstRow" hidden>
            <div class="row">
                <div class="col l3 standard-blocks center-align FuturemakersBlock">
                    <h4 class="standard-block-headers"> FutureMakers Futured by BCX </h4>
                </div>

                <div class="col l3 standard-blocks center-align FuturemakersProgrammeInfoBlock">
                    <h4 class="standard-block-headers"> Tell me more about the programme </h4>
                </div>

                <div class="col l3 standard-blocks center-align FuturemakersContentBlock">
                    <h4 class="standard-block-headers"> What content is covered? </h4>
                </div>

                <div class="col l3 center-align FuturemakersVenturesBlock">
                    <h4 class="standard-block-headers"> Who is currently on the programme? </h4>
                </div>
            </div>
        </div>

        <div id="ProgrammesINDFirstRow" hidden>
            <div class="row">
                <div class="col l3 standard-blocks center-align FuturemakersBlock">
                    <h4 class="standard-block-headers"> Isuzu Industrial Hub </h4>
                </div>

                <div class="col l3 standard-blocks center-align ISUZUProgrammeInfoBlock">
                    <h4 class="standard-block-headers"> Tell me more about the programme </h4>
                </div>

                <div class="col l3 standard-blocks center-align ISUZUContentBlock">
                    <h4 class="standard-block-headers"> What content is covered? </h4>
                </div>

                <div class="col l3 standard-blocks center-align ISUZUVenturesBlock">
                    <h4 class="standard-block-headers"> Who is currently on the programme? </h4>
                </div>
            </div>
        </div>
    </div>

   
    <div id="InnovatorsFifthSectionMobile" class="section standard-section-with-margins">
        <div id="ProgrammesFirstRow">
            <div class="row center-align">
                <h4 class="standard-header"> Which programme would you like to know more about? </h4>
            </div>

            <div class="row center-align FuturemakersBlock">
                <h5 class="standard-block-headers"> FutureMakers Futured by BCX </h5>
            </div>


            <div class="row center-align IndustrialHubBlock">
                <h5 class="standard-block-headers"> ISUZU Industrial Hub </h5>
            </div>
        </div>

        <div id="ProgrammesICTFirstRow" hidden>
            <div class="row center-align FuturemakersBlock">
                <h4 class="standard-block-headers"> FutureMakers Futured by BCX </h4>
            </div>

            <div class="row center-align FuturemakersProgrammeInfoBlock">
                <h4 class="standard-block-headers"> Tell me more about the programme </h4>
            </div>

            <div class="row center-align FuturemakersContentBlock">
                <h4 class="standard-block-headers"> What content is covered? </h4>
            </div>

            <div class="row center-align FuturemakersVenturesBlock">
                <h4 class="standard-block-headers"> Who is currently on the programme? </h4>
            </div>
        </div>

        <div id="ProgrammesINDFirstRow" hidden>
            <div class="row center-align FuturemakersBlock">
                <h4 class="standard-block-headers"> Isuzu Industrial Hub </h4>
            </div>

            <div class="row center-align ISUZUProgrammeInfoBlock">
                <h4 class="standard-block-headers"> Tell me more about the programme </h4>
            </div>

            <div class="row center-align ISUZUContentBlock">
                <h4 class="standard-block-headers"> What content is covered? </h4>
            </div>

            <div class="row center-align ISUZUVenturesBlock">
                <h4 class="standard-block-headers"> Who is currently on the programme? </h4>
            </div>
        </div>

    </div>

    {{--@* Innovators Sixth Section: Image Only *@--}}
    <div class="section standard-top-section container-fluid">
        <div class="row">
            <div class="parallax-container" id="InnovatorsSixthSection">
                <div class="parallax">
                    <img src="/images/Innovators/Futuremakers.jpg" id="InnovatorsSixthSectionImage">
                </div>
                <h1 class="standard-section-headers"> Futuremakers Programme </h1>
            </div>
        </div>
    </div>

    {{--@* Innovators Sixth Section Desktop *@--}}
    <div class="section standard-section-with-margins" id="InnovatorsSixthSectionDesktop">
        <div class="row">
            <div class="col l4">
                <div class="row">
                    <div class="col l6">
                        <img src="/images/Innovators/FutrureMakers/FutureOne.jpg" style="width: 100%; height: 100%;" />
                    </div>
                    <div class="col l6">
                        <img src="/images/Innovators/FutrureMakers/FutureTwo.jpg" style="width: 100%; height: 100%;" />
                    </div>
                </div>
                <div class="row">
                    <div class="col l6">
                        <img src="/images/Innovators/FutrureMakers/FutureThree.jpg" style="width: 100%; height: 100%" />
                    </div>
                    <div class="col l6">
                        <img src="/images/Innovators/FutrureMakers/FutureFour.jpg" style="width: 100%; height: 100%" />
                    </div>
                </div>
                <div class="row">
                    <div class="col l6">
                        <img src="/images/Innovators/FutrureMakers/FutureFive.jpg" style="width: 100%; height: 100%" />
                    </div>
                    <div class="col l6">
                        <img src="/images/Innovators/FutrureMakers/FutureSix.jpg" style="width: 100%; height: 100%" />
                    </div>
                </div>
                {{--@*<div class="row">--}}
                    {{--<div class="col l6">--}}
                        {{--<img src="/images/Innovators/FutrureMakers/FutureSeven.jpg" style="width:100%; height:100%" />--}}
                    {{--</div>--}}
                    {{--<div class="col l6">--}}
                        {{--<img src="/images/Innovators/FutrureMakers/FutureEight.jpg" style="width: 100%; height: 100%" />--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row">--}}
                    {{--<div class="col l6">--}}
                        {{--<img src="/images/Innovators/FutrureMakers/FutureNine.jpg" style="width: 100%; height: 100%" />--}}
                    {{--</div>--}}
                    {{--<div class="col l6">--}}
                        {{--<img src="/images/Innovators/FutrureMakers/FutureTen.jpg" style="width: 100%; height: 100%" />--}}
                    {{--</div>--}}
                {{--</div>*@--}}
            </div>
            <div class="col l1">

            </div>
            <div class="col l7">
                <p class="standard-paragraphs">
                    FutureMakers, Futured by BCX is an intensive programme "from concept to market" process run by Propella for IT innovators.
                </p>
                <ul>
                    <li>You need a great idea and some determination</li>
                    <li>An app, a service or an IT application that no-one else has thought of yet</li>
                    <li>Idea must fit into the operations of a Smart City or Community</li>
                    <li>Top 40 applications are selected to present and sell their idea to a panel</li>
                    <li>25 Businesses invited on an eight week "Pitch-Deck Journey" </li>
                    <li>No cost to participate</li>
                    <li>But there are also no free lunches – you will be expected to invest at least eight hours a week in Propella workshops, and even longer doing your research and groundwork. </li>
                    <li>Convince the panel that your idea has potential to turn into a business to become one of the 10 ventures who progress to Stage 2</li>
                    <li>Stage 2 is three months of incubation to validate the business and prove that it’s a viable opportunity.</li>
                    <li>Crack the nod for Stage 3 to enter a deep dive with your own Project Manager and Mentor as they journey with you to commercialisation.  </li>
                </ul>

                <p class="standard-paragraphs">
                    This is the chance you've been looking for to make your big idea a reality.
                </p>

                <p class="standard-paragraphs">
                    Be sure to bookmark this page and to return regularly to apply for the next FutureMakers adventure.
                    Applications open every few months, so you need to keep visiting the site for dates.
                </p>
            </div>
        </div>
    </div>

   
    <div class="section standard-section-with-margins" id="InnovatorsSixthSectionMobile">
        <div class="row text-justify">
            <h4 class="standard-header">More about the FutureMakers Programme: </h4>

            <p class="standard-paragraphs">
                FutureMakers, Futured by BCX is an intensive programme "from concept to market" process run by Propella for IT innovators.
            </p>

            <ul>
                <li>You need a great idea and some determination </li>
                <li>You need a great idea and some determination </li>
                <li>Idea must fit into the operations of a Smart City or Community </li>
                <li>Top 40 applications are selected to present and sell their idea to a panel </li>
                <li>25 Businesses invited on an eight week "Pitch-Deck Journey"  </li>
                <li>No cost to participate </li>
                <li> But there are also no free lunches – you will be expected to invest at least eight hours a week in Propella workshops, and even longer doing your research and groundwork. </li>
                <li>Convince the panel that your idea has potential to turn into a business to become one of the 10 ventures who progress to Stage 2 </li>
                <li> Stage 2 is three months of incubation to validate the business and prove that it’s a viable opportunity.</li>
                <li> Crack the nod for Stage 3 to enter a deep dive with your own Project Manager and Mentor as they journey with you to commercialisation.  </li>
            </ul>

            <p class="standard-paragraphs">
                This is the chance you've been looking for to make your big idea a reality.
            </p>

            <p class="standard-paragraphs">
                Be sure to bookmark this page and to return regularly to apply for the next
                FutureMakers adventure.   Applications open every few months, so you need to keep visiting the site for dates.
            </p>
        </div>
    </div>

    
    <div class="section standard-top-section container-fluid">
        <div class="row">
            <div class="parallax-container" id="InnovatorsNinthSection">
                <div class="parallax">
                    <img src="/images/Innovators/IndustrialProgramme.jpg" id="InnovatorsNinthSectionImage">
                </div>
                <h1 class="standard-section-headers"> Industrial Programme </h1>
            </div>
        </div>
    </div>

    {{--@* Innovators Ninth Section Desktop *@--}}
    <div class="section standard-section-with-margins" id="InnovatorsNinthSectionDesktop">
        <div class="row">
            <div class="col l4">
                <div class="row">
                    <div class="col l6">
                        <img src="/images/Innovators/Industrial/IND01.jpg" style="width: 100%; height: 100%;" />
                    </div>
                    <div class="col l6">
                        <img src="/images/Innovators/Industrial/IND02.jpg" style="width: 100%; height: 100%;" />
                    </div>
                </div>
                <div class="row">
                    <div class="col l6">
                        <img src="/images/Innovators/Industrial/IND03.jpg" style="width: 100%; height: 100%" />
                    </div>
                    <div class="col l6">
                        <img src="/images/Innovators/Industrial/IND04.jpg" style="width: 100%; height: 100%" />
                    </div>
                </div>
                <div class="row">
                    <div class="col l6">
                        <img src="/images/Innovators/Industrial/IND05.jpg" style="width: 100%; height: 100%" />
                    </div>
                    <div class="col l6">
                        <img src="/images/Innovators/Industrial/IND06.jpg" style="width: 100%; height: 100%" />
                    </div>
                </div>
            </div>
            <div class="col l1"></div>
            <div class="col l7">
                <p class="standard-paragraphs">
                    Propella have positioned themselves to assist both B2E (Business to Entrepreneur) and B2B (Business to Business) applicants that are
                    seeking assistance in developing their innovative products, processes and/or services within the following areas:
                </p>
                <ul>
                    <li>Renewable Energy</li>
                    <li>Energy Efficiency</li>
                    <li>Advanced Manufacturing, Automation and Industry 4.0</li>
                    <li>Internet of Things </li>
                    <li>Smart City solutions</li>
                </ul>


                <div class="row">
                    <p class="standard-paragraphs">
                        The industrial incubator will consider applicants who already have a proof-of-concept or early stage prototype.
                        Applicants are required to make an online submission on the website. Once the applications are screened internally and align to Propella’s
                        vision and focus areas, then applicants would be required to present their innovations to a panel. Should the panel endorse the application,
                        the start of a 3-year journey with Propella would commence.
                    </p>
                </div>

                <div class="row">
                    <p class="standard-paragraphs">
                        Propella offers both virtual and physical incubation services. The warehouse facility is well equipped and ideally suited to low volume production.
                        Prototyping support facilities such as 3D printing, 3D scanning and small part machining and molding are available, together with a well-resourced workshop
                        that has all the basic tools required for manufacturing. There is also a network of skilled technical and business support.
                        If there are products that demonstrate great growth / market potential, Propella would also be willing to engage in ‘cash for equity’ discussions.
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{--@* Innovators Ninth Section Mobile *@--}}
    <div class="section standard-section-with-margins" id="InnovatorsNinthSectionMobile">
        <div class="row">
            <p class="standard-paragraphs">
                Propella have positioned themselves to assist both B2E (Business to Entrepreneur) and B2B (Business to Business) applicants that are
                seeking assistance in developing their innovative products, processes and/or services within the following areas:
            </p>
            <ul>
                <li>Renewable Energy</li>
                <li>Energy Efficiency</li>
                <li>Advanced Manufacturing, Automation and Industry 4.0</li>
                <li>Internet of Things </li>
                <li>Smart City solutions</li>
            </ul>
        </div>

        <div class="row">
            <p class="standard-paragraphs">
                The industrial incubator will consider applicants who already have a proof-of-concept or early stage prototype.
                Applicants are required to make an online submission on the website. Once the applications are screened internally and align to Propella’s
                vision and focus areas, then applicants would be required to present their innovations to a panel. Should the panel endorse the application,
                the start of a 3-year journey with Propella would commence.
            </p>
        </div>

        <div class="row">
            <p class="standard-paragraphs">
                Propella offers both virtual and physical incubation services. The warehouse facility is well equipped and ideally suited to low volume production.
                Prototyping support facilities such as 3D printing, 3D scanning and small part machining and molding are available, together with a well-resourced workshop
                that has all the basic tools required for manufacturing. There is also a network of skilled technical and business support.
                If there are products that demonstrate great growth / market potential, Propella would also be willing to engage in ‘cash for equity’ discussions.
            </p>
        </div>
    </div>

    {{--@* Innovators Tenth Section: Image Only *@--}}
    <div class="section standard-top-section container-fluid">
        <div class="row">
            <div class="parallax-container" id="InnovatorsTenthSection">
                <div class="parallax">
                    <img src="/images/Innovators/IndustrialContent.jpg" id="InnovatorsTenthSectionImage">
                </div>
                <h1 class="standard-section-headers"> Industrial Content </h1>
            </div>
        </div>
    </div>

    {{--@* Innovators Tenth Section Desktop *@--}}
    <div class="section standard-section-with-margins" id="InnovatorsTenthSectionDesktop">
        <div class="row">
            <p class="standard-paragraphs">
                Content covered for Industrial innovators is determined by an in-depth diagnostic conducted on the business and
                technology as the venture enters the programme.  A journey is charted and agreed on that best utilises the resources made
                available by Propella and the objective and times frames of the innovator.
            </p>
        </div>

        <div class="row">
            <p class="standard-paragraphs">
                Typically, an advisor and mentor are assigned to the innovator who also receives access to the Propella Content Platform and bi-weekly workshops offered by Propella.
            </p>
        </div>

        <div class="row">
            <p class="standard-paragraphs">
                The following key development stages are covered over a maximum period of 3 years;
            </p>
            <ul>
                <li>Prototype finalisation testing and trialling</li>
                <li>Go to market preparation, and</li>
                <li>Growth scenarios, preparation and scaling of the business</li>
            </ul>
        </div>
    </div>

    {{--@* Innovators Tenth Section Mobile *@--}}
    <div class="section standard-section-with-margins" id="InnovatorsTenthSectionMobile">
        <div class="row">
            <p class="standard-paragraphs">
                Content covered for Industrial innovators is determined by an in-depth diagnostic conducted on the business and
                technology as the venture enters the programme.  A journey is charted and agreed on that best utilises the resources made
                available by Propella and the objective and times frames of the innovator.
            </p>
        </div>

        <div class="row">
            <p class="standard-paragraphs">
                Typically, an advisor and mentor are assigned to the innovator who also receives access to the Propella Content Platform and bi-weekly workshops offered by Propella.
            </p>
        </div>

        <div class="row">
            <p class="standard-paragraphs">
                The following key development stages are covered over a maximum period of 3 years;
            </p>
            <ul>
                <li>Prototype finalisation testing and trialling</li>
                <li>Go to market preparation, and</li>
                <li>Growth scenarios, preparation and scaling of the business</li>
            </ul>
        </div>
    </div>

    {{--@* Innovators Seventh Section: Image Only *@--}}
    <div class="section standard-top-section container-fluid">
        <div class="row">
            <div class="parallax-container" id="InnovatorsSeventhSection">
                <div class="parallax">
                    <img src="/images/Innovators/2.7 Funding Options.jpg" id="InnovatorsSeventhSectionImage">
                </div>
                <h1 class="standard-section-headers"> Funding Options </h1>
            </div>
        </div>
    </div>

    {{--@* Innovators Seventh Section Desktop *@--}}
    <div class="section standard-section-with-margins" id="InnovatorsSeventhSectionDesktop">
        <div class="row">
            <div class="col l4">
                <div class="standard-left-buttons MoreInfoBlock">
                    <h5 class="standard-left-button-headers"> Tell me more about the fund. </h5>
                </div>

                <div class="standard-left-buttons TIAQuestionsBlock">
                    <h5 class="standard-left-button-headers"> Question to answer before applying for TIA funding. </h5>
                </div>
                <div class="standard-left-buttons CriteriaBlock">
                    <h5 class="standard-left-button-headers"> Qualifying criteria for TIA funding. </h5>
                </div>

                <div class="standard-left-buttons FundedActivitiesBlock">
                    <h5 class="standard-left-button-headers"> TIA Funded activities include. </h5>
                </div>
                <div class="standard-left-buttons ExcludedActivitiesBlock">
                    <h5 class="standard-left-button-headers"> Activities exclude from TIA funding. </h5>
                </div>

                <div class="standard-left-buttons TIAApplyBlock">
                    <h5 class="standard-left-button-headers"> How do I apply for TIA funding </h5>
                </div>
            </div>

            <div class="col l1"></div>

            <div class="col l7">
                <div class="row" id="TIASeedFundInfoDesktop">

                    <h4 class="standard-header"> Funding Options </h4>
                    <p>
                        We completely understand that start-up ventures need capital and that the "go to" for most is ofter the standard
                        "Friends, Family &amp; Fools" options. Propella assists with the application for funding through its network of government
                        and private sector institutions.
                    </p>

                    <hr />

                    <h4 class="standard-header">TIA SMME Seed Fund</h4>
                    <p>
                        Propella has been contracted by the Technology Innovation Agency (TIA) to <br />
                        implement to an SMME Seed Fund, aimed at assisting knowledge economy-based<br />
                        SMMEs in the Eastern Cape to access bridging finance to advance their innovative<br />
                        ideas to market. The monetary value of the grant funding will range from R50 000<br />
                        (minimum) to R650 000 (maximum) per project.
                    </p>
                </div>

                <div class="row" id="TIAProposalInfoDesktop" hidden>
                    <h6 class="standard-header">
                        TIA seed fund proposal: please take note of the following considerations
                        before completing the application form
                    </h6>
                    <p class="standard-paragraphs">
                    <ul>
                        <li><i class="tiny material-icons">info</i> Is your product / service beyond just an idea?</li>
                        <li>
                            <i class="tiny material-icons">info</i> Have you developed a prototype/minimum viable product (MVP) for your<br />
                            product / service / idea?
                        </li>
                        <li>
                            <i class="tiny material-icons">info</i> Can you substantiate that there is a real need in the market for your product / <br />
                            service? Have you done a market assessment and or viability study?
                        </li>
                        <li><i class="tiny material-icons">info</i> Is your product / service unique? Is it patentable?</li>
                        <li><i class="tiny material-icons">info</i> Will the product / service be developed and remain in Nelson Mandela Bay?</li>
                        <li>
                            <i class="tiny material-icons">info</i> Does your product / service fall  within the renewable energy, energy<br />
                            effeciency, circular economy, advanced manufacturing, IoT sectors?
                        </li>
                        <li>
                            <i class="tiny material-icons">info</i> Are you prepared to participate in the Propella Incubation Programme if<br />
                            requested to do so?
                        </li>
                    </ul>
                    </p>
                </div>

                <div class="row" id="CriteriaInfoDesktop" hidden>
                    <h6 class="standard-header">Applicants must please take note of the following qualifying criteria:</h6>

                    <p class="standard-paragraphs">
                    <ul>
                        <li><i class="tiny material-icons">info</i> The product / service must be at Technology Level (TRL) 3</li>
                        <li>
                            <i class="tiny material-icons">info</i> A basic working prototype must have been deployed - i.e. you must be able to<br />
                            demostrat that the prototype works
                        </li>
                        <li><i class="tiny material-icons">info</i> The product / service must be unique or a differentiator in the market</li>
                        <li>
                            <i class="tiny material-icons">info</i> Applicants must have done  a market assessment to establish a clear need for their<br />
                            product / service
                        </li>
                        <li><i class="tiny material-icons">info</i> Applicants must be prepared to enter the Propella Incubation Programme</li>
                    </ul>
                    <br />
                    This Proposal Call is limited to the following sectors:
                    <ul>
                        <li><i class="tiny material-icons">info</i> Renewable Energy</li>
                        <li><i class="tiny material-icons">info</i> Energy Efficiency</li>
                        <li><i class="tiny material-icons">info</i> Circular Economy</li>
                        <li><i class="tiny material-icons">info</i> Advanced Manufacturing</li>
                        <li><i class="tiny material-icons">info</i> Internet of Things (IoT) / Smart City Solutions.</li>
                    </ul>
                    </p>
                </div>

                <div class="row" id="FundedActivitiesInfoDesktop" hidden>
                    <h6 class="standard-header">Funding will be directed at SMMEs / Entrepreneurs requiring the following activities:</h6>
                    <p class="standard-paragraphs">
                    <ul>
                        <li>
                            <i class="tiny material-icons">info</i> Developing the prototype or process further to market readiness (as part of<br />
                            comprehensive technology package);/li>
                        <li><i class="tiny material-icons">info</i> Intellectual property ("IP") support and sourcing of IP opinions;</li>
                        <li><i class="tiny material-icons">info</i> Production of market samples and/or associated testing;</li>
                        <li><i class="tiny material-icons">info</i> Techno-economic evaluation studies;</li>
                        <li><i class="tiny material-icons">info</i> Conducting field studies to further develop the technology, market and/or customer needs;</li>
                        <li><i class="tiny material-icons">info</i> Refining and implementing designs;</li>
                        <li><i class="tiny material-icons">info</i> Support of certification activities;</li>
                        <li><i class="tiny material-icons">info</i> Piloting outputs and technology scale-up and techno-economic evaluation;</li>
                        <li><i class="tiny material-icons">info</i> Business plan development</li>
                    </ul>
                    </p>
                </div>

                <div class="row" id="ExcludedActivitiesInfoDesktop" hidden>
                    <h6 class="standard-header">The following activities will not quality for funding support:</h6>
                    <p class="standard-paragraphs">
                    <ul>
                        <li><i class="tiny material-icons">info</i> Working Capital</li>
                        <li><i class="tiny material-icons">info</i> Operation expenses</li>
                        <li>
                            <i class="tiny material-icons">info</i> Purchasing of equipment that is not within the applicant's scope of work and<br />
                            relevant to the allowable activities and objective of their application.
                        </li>
                    </ul>
                    Projects should have the potential for further investment and development by funders.<br />
                    <br />
                    <b>Please read the information and criteria below and contact</b><br />
                    mara@propellaincubator.co.za <b>
                        for an application form or download the <br />
                        appliaction form below if you believe you meet the requirements.
                    </b>
                    </p>
                </div>

                <div class="row" id="ApplyForFundingInfoDesktop" hidden>
                    <p>Information to be confirmed.</p>
                </div>
            </div>
        </div>
    </div>

    {{--@* Innovators Seventh Section Mobile *@--}}
    <div class="section standard-section-with-margins" id="InnovatorsSeventhSectionMobile">
        <div class="row center-align">
            <div class="row">
                <div class="standard-blocks col s6 MoreInfoBlock">
                    <h5 class="standard-block-headers"> Tell me more about the fund. </h5>
                </div>

                <div class="standard-blocks col s6 TIAQuestionsBlock">
                    <h5 class="standard-block-headers"> Question to answer before applying for TIA funding. </h5>
                </div>
            </div>

            <div class="row">
                <div class="standard-blocks col s6 CriteriaBlock">
                    <h5 class="standard-block-headers"> Qualifying criteria for TIA funding. </h5>
                </div>

                <div class="standard-blocks col s6 FundedActivitiesBlock">
                    <h5 class="standard-block-headers"> TIA Funded activities include. </h5>
                </div>
            </div>

            <div class="row">
                <div class="standard-blocks col s6 ExcludedActivitiesBlock">
                    <h5 class="standard-block-headers"> Activities exclude from TIA funding. </h5>
                </div>

                <div class="standard-blocks col s6 TIAApplyBlock">
                    <h5 class="standard-block-headers"> How do I apply for TIA funding </h5>
                </div>
            </div>
        </div>



        <div class="row text-justify" id="TIASeedFundInfoMobile">
            <div class="row">
                <h4 class="standard-header"> Funding Options </h4>
                <p>
                    We completely understand that start-up ventures need capital and that the "go to" for most is ofter the standard
                    "Friends, Family &amp; Fools" options. Propella assists with the application for funding through its network of government
                    and private sector institutions.
                </p>
            </div>
            <hr />
            <div class="row">
                <h4 class="standard-header">TIA SMME Seed Fund</h4>
                <p>
                    Propella has been contracted by the Technology Innovation Agency (TIA) to <br />
                    implement to an SMME Seed Fund, aimed at assisting knowledge economy-based<br />
                    SMMEs in the Eastern Cape to access bridging finance to advance their innovative<br />
                    ideas to market. The monetary value of the grant funding will range from R50 000<br />
                    (minimum) to R650 000 (maximum) per project.
                </p>
            </div>
        </div>

        <div class="row text-justify" id="TIAProposalInfoMobile" hidden>
            <h6 class="standard-header">
                TIA seed fund proposal: please take note of the following considerations
                before completing the application form
            </h6>
            <p class="standard-paragraphs">
            <ul>
                <li><i class="tiny material-icons">info</i> Is your product / service beyond just an idea?</li>
                <li>
                    <i class="tiny material-icons">info</i> Have you developed a prototype/minimum viable product (MVP) for your<br />
                    product / service / idea?
                </li>
                <li>
                    <i class="tiny material-icons">info</i> Can you substantiate that there is a real need in the market for your product / <br />
                    service? Have you done a market assessment and or viability study?
                </li>
                <li><i class="tiny material-icons">info</i> Is your product / service unique? Is it patentable?</li>
                <li><i class="tiny material-icons">info</i> Will the product / service be developed and remain in Nelson Mandela Bay?</li>
                <li>
                    <i class="tiny material-icons">info</i> Does your product / service fall  within the renewable energy, energy<br />
                    effeciency, circular economy, advanced manufacturing, IoT sectors?
                </li>
                <li>
                    <i class="tiny material-icons">info</i> Are you prepared to participate in the Propella Incubation Programme if<br />
                    requested to do so?
                </li>
            </ul>
            </p>
        </div>

        <div class="row text-justify" id="CriteriaInfoMobile" hidden>
            <h6 class="standard-header">Applicants must please take note of the following qualifying criteria:</h6>

            <p class="standard-paragraphs">
            <ul>
                <li><i class="tiny material-icons">info</i> The product / service must be at Technology Level (TRL) 3</li>
                <li>
                    <i class="tiny material-icons">info</i> A basic working prototype must have been deployed - i.e. you must be able to<br />
                    demostrat that the prototype works
                </li>
                <li><i class="tiny material-icons">info</i> The product / service must be unique or a differentiator in the market</li>
                <li>
                    <i class="tiny material-icons">info</i> Applicants must have done  a market assessment to establish a clear need for their<br />
                    product / service
                </li>
                <li><i class="tiny material-icons">info</i> Applicants must be prepared to enter the Propella Incubation Programme</li>
            </ul>
            <br />
            This Proposal Call is limited to the following sectors:
            <ul>
                <li><i class="tiny material-icons">info</i> Renewable Energy</li>
                <li><i class="tiny material-icons">info</i> Energy Efficiency</li>
                <li><i class="tiny material-icons">info</i> Circular Economy</li>
                <li><i class="tiny material-icons">info</i> Advanced Manufacturing</li>
                <li><i class="tiny material-icons">info</i> Internet of Things (IoT) / Smart City Solutions.</li>
            </ul>
            </p>
        </div>

        <div class="row text-justify" id="FundedActivitiesInfoMobile" hidden>
            <h6 class="standard-header">Funding will be directed at SMMEs / Entrepreneurs requiring the following activities:</h6>
            <p class="standard-paragraphs">
            <ul>
                <li>
                    <i class="tiny material-icons">info</i> Developing the prototype or process further to market readiness (as part of<br />
                    comprehensive technology package);/li>
                <li><i class="tiny material-icons">info</i> Intellectual property ("IP") support and sourcing of IP opinions;</li>
                <li><i class="tiny material-icons">info</i> Production of market samples and/or associated testing;</li>
                <li><i class="tiny material-icons">info</i> Techno-economic evaluation studies;</li>
                <li><i class="tiny material-icons">info</i> Conducting field studies to further develop the technology, market and/or customer needs;</li>
                <li><i class="tiny material-icons">info</i> Refining and implementing designs;</li>
                <li><i class="tiny material-icons">info</i> Support of certification activities;</li>
                <li><i class="tiny material-icons">info</i> Piloting outputs and technology scale-up and techno-economic evaluation;</li>
                <li><i class="tiny material-icons">info</i> Business plan development</li>
            </ul>
            </p>
        </div>

        <div class="row text-justify" id="ExcludedActivitiesInfoMobile" hidden>
            <h6 class="standard-header">The following activities will not quality for funding support:</h6>
            <p class="standard-paragraphs">
            <ul>
                <li><i class="tiny material-icons">info</i> Working Capital</li>
                <li><i class="tiny material-icons">info</i> Operation expenses</li>
                <li>
                    <i class="tiny material-icons">info</i> Purchasing of equipment that is not within the applicant's scope of work and<br />
                    relevant to the allowable activities and objective of their application.
                </li>
            </ul>
            Projects should have the potential for further investment and development by funders.<br />
            <br />
            <b>Please read the information and criteria below and contact</b><br />
            mara@propellaincubator.co.za <b>
                for an application form or download the <br />
                appliaction form below if you believe you meet the requirements.
            </b>
            </p>
        </div>

        <div class="row text-justify" id="ApplyForFundingInfoMobile" hidden>
            <p>Information to be confirmed.</p>
        </div>
    </div>

    {{--@* Innovators Eigth Section: Image Only *@--}}
    <div class="section standard-top-section container-fluid">
        <div class="row">
            <div class="parallax-container" id="InnovatorsEigthSection">
                <div class="parallax">
                    <img src="/images/Innovators/Appliaction/Application.jpg" id="InnovatorsEigthSectionImage">
                </div>
                <h1 class="standard-section-headers"> Application Process </h1>
            </div>
        </div>
    </div>

    <div class="section standard-section-with-margins" id="InnovatorsEigthSectionDesktop">
        <div class="row">
            <div class="col l4">
                <div class="standard-left-buttons ApplicationBlock">
                    <h5 class="standard-left-button-headers"> Apply for IND </h5>
                </div>

                <div class="standard-left-buttons InterestedBlock">
                    <h5 class="standard-left-button-headers"> If I’m interested in applying what is the process? </h5>
                </div>

                <div class="standard-left-buttons SubmittedApplicationBlock">
                    <h5 class="standard-left-button-headers"> My application has been submitted, what’s next? </h5>
                </div>

                <div class="standard-left-buttons ApplicationBlock">
                    <h5 class="standard-left-button-headers"> Apply for ICT </h5>
                </div>

            </div>

            <div class="col l1"></div>

            <div class="col l7">
                <div class="row center-align" id="ApplicationProcessImageDesktop">
                    <h5>There is a process, but it’s a quick and easy one. Take a look at the journey below. </h5>
                    <img src="/images/Innovators/Appliaction/Process.jpg" style="width: 100%; height: 100%;" />
                </div>

                <div class="row" id="SubmittedApplicationInfoDesktop" hidden>
                    <h5> My application has been submitted, what’s next? </h5>
                    <p class="standard-paragraphs">
                        We will be in contact with you to let you know that we’ve received your application and what the next step is.
                    </p>
                    <p class="standard-paragraphs">
                        It may be a referral to another Enterprise Development Agency, a call to find out more or an invitation to come in for a chat.
                    </p>
                    <p class="standard-paragraphs">
                        If there is mutual interest, you will be invited to present to a Selection Panel who make the final decision regarding incubation.  And then the journey begins.
                    </p>
                </div>

                <div class="row" id="AcceptedInfoDesktop" hidden>
                    <h5> If I’m accepted, what support can I expect to get? </h5>
                    <p>Typical support includes:</p>
                    <ul>
                        <li><i class="tiny material-icons">info</i>  Mentoring and coaching</li>
                        <li><i class="tiny material-icons">info</i> Generic business training</li>
                        <li><i class="tiny material-icons">info</i> Specialised business training </li>
                        <li><i class="tiny material-icons">info</i> Access to technical training</li>
                        <li><i class="tiny material-icons">info</i> Product development</li>
                        <li><i class="tiny material-icons">info</i> Technology transfer</li>
                        <li><i class="tiny material-icons">info</i> Product testing and verification</li>
                        <li><i class="tiny material-icons">info</i> Facilitation of patent and copyright applications</li>
                        <li><i class="tiny material-icons">info</i> Advanced market research</li>
                        <li><i class="tiny material-icons">info</i> Interfirm comparison/benchmarking</li>
                        <li><i class="tiny material-icons">info</i> Marketing assistance</li>
                        <li><i class="tiny material-icons">info</i> Management system implementation</li>
                        <li><i class="tiny material-icons">info</i> QMS advising and implementation</li>
                        <li><i class="tiny material-icons">info</i> Business-to-business facilitation</li>
                        <li><i class="tiny material-icons">info</i> Facilitate access to finance</li>
                        <li><i class="tiny material-icons">info</i> Trade show facilitation</li>
                        <li><i class="tiny material-icons">info</i> Export readiness assistance</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

   
    <div class="section standard-section-with-margins" id="InnovatorsEigthSectionMobile">
        <div class="row  ApplicationBlock center-align">
            <h5> Apply for IND </h5>
        </div>

        <div class="row InterestedBlock center-align">
            <h5> If I’m interested in applying what is the process? </h5>
        </div>


        <div class="row SubmittedApplicationBlock center-align">
            <h5> My application has been submitted, what’s next? </h5>
        </div>

        <div class="row  ApplicationBlock center-align">
            <h5> Apply for ICT </h5>
        </div>



        <div class="row text-justify" id="ApplicationProcessImageMobile">
            <h5>There is a process, but it’s a quick and easy one. Take a look at the journey below. </h5>
            <img src="/images/Innovators/Appliaction/Process.jpg" style="width: 100%; height: 100%;" />
        </div>

        <div class="row text-justify" id="SubmittedApplicationInfoMobile" hidden>
            <h5> My application has been submitted, what’s next? </h5>
            <p class="standard-paragraphs">
                We will be in contact with you to let you know that we’ve received your application and what the next step is.
            </p>
            <p class="standard-paragraphs">
                It may be a referral to another Enterprise Development Agency, a call to find out more or an invitation to come in for a chat.
            </p>
            <p class="standard-paragraphs">
                If there is mutual interest, you will be invited to present to a Selection Panel who make the final decision regarding incubation.  And then the journey begins.
            </p>
        </div>

      
    </div>


    <script>
    $(document).ready(function () {
        //ScrollSpy
        $('.scrollspy').scrollSpy();

        //Parallax
        $('.parallax').parallax();

        //Get Industrial Section
        $('#INDBtn').on('click', function () {
            $('#secondSection').hide();
            $('#IndustrialFirstRow').show();
            location.href = '#IndustrialFirstRow';
        });

        //Get ICT Section
        $('#ICTBtn').on('click', function () {
            $('#secondSection').hide();
            $('#ICTFirstRow').show();
            location.href = '#ICTFirstRow';
        });

        //Industrial Idea Button Click. Final Section Show
        $('#industrialIdeaBtn').on('click', function () {
            $('#IndustrialFirstRow').hide();
            $('#industrialDesignRow').hide();
            $('#industrialPrototypeRow').hide();
            $('#industrialIdeaRow').show();
            $('#industrialCancelSection').show();
            location.href = '#IdeaRow';
        });

        //ICT Idea Button Click. Final Section Show
        $('#ictIdeaBtn').on('click', function () {
            $('#ICTFirstRow').hide();
            $('#ictWireFrameRow').hide();
            $('#ictApplicationRow').hide();
            $('#ictIdeaRow').show();
            $('#ictCancelSection').show();
        });

        //Industrial Design Button Click. Final Section Show
        $('#industrialDesignBtn').on('click', function () {
            $('#IndustrialFirstRow').hide();
            $('#industrialIdeaRow').hide();
            $('#industrialPrototypeRow').hide();
            $('#industrialDesignRow').show();
            $('#industrialCancelSection').show();
            location.href = '#DesignRow';
        });

        //ICT WireFrame Button Click. Final Section Show
        $('#ictWireFrameBtn').on('click', function () {
            $('#ICTFirstRow').hide();
            $('#ictApplicationRow').hide();
            $('#ictIdeaRow').hide();
            $('#ictWireFrameRow').show();
            $('#ictCancelSection').show();
        });

        //Industrial Prototype Button Click. Final Section Show.
        $('#industrialPrototypeBtn').on('click', function () {
            $('#IndustrialFirstRow').hide();
            $('#industrialIdeaRow').hide();
            $('#industrialDesignRow').hide();
            $('#industrialPrototypeRow').show();
            $('#industrialCancelSection').show();
            location.href = '#PrototypeRow';
        });

        //ICT Application Button Click. Final Section Show
        $('#ictApplicationBtn').on('click', function () {
            $('#ICTFirstRow').hide();
            $('#ictWireFrameRow').hide();
            $('#ictIdeaRow').hide();
            $('#ictApplicationRow').show();
            $('#ictCancelSection').show();
        });

        //Industrial Cancel Button
        $('#industrialCancelBtn').on('click', function () {
            $('#IndustrialFirstRow').show();
            $('#industrialIdeaRow').hide();
            $('#industrialDesignRow').hide();
            $('#industrialPrototypeRow').hide();
            $('#industrialCancelSection').hide();
        });

        //ICT Cancel Button
        $('#ictCancelBtn').on('click', function () {
            $('#ICTFirstRow').show();
            $('#ictIdeaRow').hide();
            $('#ictWireFrameRow').hide();
            $('#ictApplicationRow').hide();
            $('#ictCancelSection').hide();
        });

        //SHOW AND HIDE

        //Hide Sections
        $('#Innovator8Section').hide();
        $('#Innovator9Section').hide();

        //SHow The Section onClick
        $('#bntInnovatorTwwo').on('click', function () {
            $('#Innovator8Section').show();
            $('#Innovator9Section').hide();
            $('#InnovatorSeventhSection').hide();
        });
        $('#bntInnovator3').on('click', function () {
            $('#Innovator9Section').show();
            $('#Innovator8Section').hide();
            $('#InnovatorSeventhSection').hide();
        });

        //<FUNDING OPTIONS>
        $('#InnovatorsCol3Para2').hide();
        $('#InnovatorsCol3Para3').hide();
        $('#InnovatorsCol3Para4').hide();
        $('#InnovatorsCol3Para5').hide();
        $('#InnovatorsCol3Para6').hide();

        //SHow The Section onClick
        $('#InnovatorsCol1Btn1').on('click', function () {
            $('#InnovatorsCol3Para1').show();
            $('#InnovatorsCol3Para2').hide();
            $('#InnovatorsCol3Para3').hide();
            $('#InnovatorsCol3Para4').hide();
            $('#InnovatorsCol3Para5').hide();
            $('#InnovatorsCol3Para6').hide();
        });
        $('#InnovatorsCol1Btn2').on('click', function () {
            $('#InnovatorsCol3Para2').show();
            $('#InnovatorsCol3Para1').hide();
            $('#InnovatorsCol3Para3').hide();
            $('#InnovatorsCol3Para4').hide();
            $('#InnovatorsCol3Para5').hide();
            $('#InnovatorsCol3Para6').hide();
        });
        $('#InnovatorsCol1Btn3').on('click', function () {
            $('#InnovatorsCol3Para3').show();
            $('#InnovatorsCol3Para1').hide();
            $('#InnovatorsCol3Para2').hide();
            $('#InnovatorsCol3Para4').hide();
            $('#InnovatorsCol3Para5').hide();
            $('#InnovatorsCol3Para6').hide();
        });
        $('#InnovatorsCol1Btn4').on('click', function () {
            $('#InnovatorsCol3Para4').show();
            $('#InnovatorsCol3Para1').hide();
            $('#InnovatorsCol3Para2').hide();
            $('#InnovatorsCol3Para3').hide();
            $('#InnovatorsCol3Para5').hide();
            $('#InnovatorsCol3Para6').hide();

        });
        $('#InnovatorsCol1Btn5').on('click', function () {
            $('#InnovatorsCol3Para5').show();
            $('#InnovatorsCol3Para1').hide();
            $('#InnovatorsCol3Para2').hide();
            $('#InnovatorsCol3Para3').hide();
            $('#InnovatorsCol3Para4').hide();
            $('#InnovatorsCol3Para6').hide();
        });
        $('#InnovatorsCol1Btn6').on('click', function () {
            $('#InnovatorsCol3Para6').show();
            $('#InnovatorsCol3Para1').hide();
            $('#InnovatorsCol3Para2').hide();
            $('#InnovatorsCol3Para3').hide();
            $('#InnovatorsCol3Para4').hide();
            $('#InnovatorsCol3Para5').hide();
        });

        //QUIZ SCRIPT
        var score = 0;

        $('#ReadyCheckBtn').on('click', function () {
            $('#QuestionContent').show();
            $('#ReadyCheckBtn').hide();
        });

        $('.scoreBtn').on('click', function () {
            score = score + 5;
        });

        $('.QuestionOneBtn').on('click', function () {
            $('.QuestionTwoDiv').show();
        });

        $('.QuestionTwoBtn').on('click', function () {
            $('.QuestionThreeDiv').show();
        });

        $('.QuestionThreeBtn').on('click', function () {
            $('.QuestionFourDiv').show();
        });

        $('.QuestionFourBtn').on('click', function () {
            $('.QuestionFiveDiv').show();
        });

        $('.QuestionFiveBtn').on('click', function () {
            $('.QuestionSixDiv').show();
        });

        $('.QuestionSixBtn').on('click', function () {
            $('.QuestionSevenDiv').show();
        });

        $('.QuestionSevenBtn').on('click', function () {
            $('.QuestionEightDiv').show();
        });

        $('.QuestionEightBtn').on('click', function () {
            $('.QuestionNineDiv').show();
        });

        $('.QuestionNineBtn').on('click', function () {
            $('.QuestionTenDiv').show();
        });

        $('.QuestionTenBtn').on('click', function () {
            $('.QuestionElevenDiv').show();
        });

        $('.QuestionElevenBtn').on('click', function () {
            $('.QuestionTwelveDiv').show();
        });

        $('.finalBtn').on('click', function () {
            console.log(score);

            if (score >= 45) {
                $('#HighParagraph').show();
            } else if ((score < 45) && (score >= 35)) {
                $('#AverageParagraph').show();
            } else if (score < 35) {
                $('#LowParagraph').show();
            }
        });

        //Application js
        $('#PointThreeBtn').on('click', function () {
            location.href = '#ThirdImage';
        });
    });
    $(document).ready(function () {
        $('#PointTwoBtn').on('click', function () {
            location.href = '#SecondImage';
        });
    });
    $(document).ready(function () {
        $('#PointOneBtn').on('click', function () {
            location.href = '#TopImage';
        });
    });
    $(document).ready(function () {
        $('#PointONEBtn').on('click', function () {
            location.href = '#TopImage';
        });
    });
    $(document).ready(function () {
        $('#PointTWOBtn').on('click', function () {
            location.href = '#SecondImage';
        });
    });
    $(document).ready(function () {
        $('#PointTHREEBtn').on('click', function () {
            location.href = '#ThirdImage';
        });
    });
    $(document).ready(function () {
        $('#Point1Btn').on('click', function () {
            location.href = '#TopImage';
        });
    });
    $(document).ready(function () {
        $('#Point2Btn').on('click', function () {
            location.href = '#SecondImage';
        });
    });
    $(document).ready(function () {
        $('#Point3Btn').on('click', function () {
            location.href = '#ThirdImage';
        });

        //Redirecting code
        $('#bntInnovatorOne').on('click', function () {
            location.href = '#InnovatorsFourthSection';
        });
        $('#bntInnovatorTwo').on('click', function () {
            location.href = '#InnovatorsSixthSection';
        });
        $('#bntInnovatorThree').on('click', function () {
            location.href = '#TopImage';
        });
        $('#bntInnovatorFour').on('click', function () {
            location.href = '#Innovator10Section';
        });
        $('#bntInnovatorFour').on('click', function () {
            location.href = '#Innovator10Section';
        });
        $('#bntInnovatorSix').on('click', function () {
            location.href = '#TopImage1';
        });
    });
</script>


@endsection