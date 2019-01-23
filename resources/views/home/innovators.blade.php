@extends('layouts.app')

@section('content')
    <link rel="stylesheet" type="text/css" href="/css/Innovators/Innovators.css" />
    <link type="text/css" rel="stylesheet" href="/css/Quiz/QuizMain.css" />
    <link rel="stylesheet" type="text/css" href="/css/Application.css" />
    <link rel="stylesheet" type="text/css" href="/css/Business.css" />
    <link rel="stylesheet" type="text/css" href="/css/FutureMakers.css" />
    <link rel="stylesheet" href="/css/Application.css"/>-
    <div class="section right-align" id="InnovatorsTop1Section">
        <h2 id="InnovatorsTopSectionHeader">The Innovators</h2>
    </div>

    <div class="section center-align" id="InnovatorsSecondSection">
        <div class="row">
            <div class="col m4">
                <div class="row">
                    <h4 id="AboutSecondSectionHeaderThree">The Innovators</h4>
                    <p class="second-section-paragraph">
                        <b>For innovators:</b> We are the catalyst for your creativity - Propella helps IT and
                        manufacturing innovators and entreprenuers to grow from zero to hero.
                    </p>
                </div>
                <br />
                <a href="Categories" class="flip-box-button modal-trigger">Ventures</a>
            </div>


            <div class="col m8" id="InnovatorsBlocksSection">
                <div class="row">
                    <a  id="bntInnovatorOne" class="waves-effect waves-light  btn-large smartCityBtn center-align"><h6 style="padding-top:40px;">I have an idea, what's next?</h6></a>
                    <a  id="bntInnovatorTwo" class="waves-effect waves-light blue darken-3 btn-large smartCityBtn center-align">
                        <h6 style="padding-top:15px;">
                            What programmes do you offer?<br />
                            -ICT and Industrial Hubs
                        </h6>
                    </a>
                </div>
                <div class="row">
                    <a  id="bntInnovatorThree" class="waves-effect waves-light blue darken-3 btn-large smartCityBtn center-align"><h6 style="padding-top:30px;">Is my Idea ready to be Incubated?</h6></a>
                    <a  id="bntInnovatorFour" class="waves-effect waves-light white btn-large smartCityBtn center-align"><h6 style="padding-top:40px; color:black;">Are there funding options?</h6></a>
                </div>
                <div class="row">
                    <a  id="bntInnovatorFive" class="waves-effect waves-light white btn-large smartCityBtn center-align"><h6 style="padding-top:40px; color:black;">Frequently Asked Questions</h6></a>
                    <a  id="bntInnovatorSix" class="waves-effect waves-light green darken-3 btn-large smartCityBtn center-align"><h6 style="padding-top:40px;">How do I Apply?</h6></a>
                </div>
            </div>
        </div>
    </div>


    <div class="section" id="InnovatorsFourthSection">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="/css/Idea/IdeaMain.css" />


        <!--Section: Top-->
        <div class="parralax-container">
            <div class="parralax">
                <section class="section center-align" id="topSection">
                    <div id="primaryOverlay">
                        <div class="showcase container">
                            <h2>So you have an Idea?</h2>
                            <p class="flow-text">Now is the time to take action!</p>
                            <br />
                            <a class="white-text" href="#InitialParagraph"><i class="material-icons medium scroll-icon">arrow_drop_down_circle</i></a>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <!--Section: Body-->
        <!--Initial Paragraph-->
        <section class="section center-align scrollspy" id="InitialParagraph">
            <div class="container-fluid" id="InitialParagraphText">
                <h4>Congrats! You're in the right place!</h4>
                <p>Propella can help you to take your product or IT solution to the market.</p>
                <br />
                <p>
                    If your innovation can improve the lives of people living in cities around the world,
                    we'd like to engage further but first we need to know a bit more...
                </p>
            </div>
            <p></p>
        </section>
        <br />
        <br />
        <!--Second Section-->
        <section class="section center-align" id="secondSection">
            <div class="row">
                <div class="col m2" id="firstRowFirstDiv">
                    <h4>What type of idea is it?</h4>
                </div>
                <div class="col m5" id="firstRowSecondDiv">
                    <h4 id="ICTHeader">Information Technologies</h4>
                    <a class="btn btn-large red" id="ICTBtn">ICT</a>
                </div>
                <div class="col m5" id="firstRowThirdDiv">
                    <h4 id="INDHeader">Industrial</h4>
                    <button class="btn btn-large red" id="INDBtn">Industrial</button>
                </div>
                <div class="col m3">
                </div>
            </div>
        </section>

        <!--Industrial First Row-->
        <div id="IndustrialFirstRow" hidden class="center-align">
            <div class="row">
                <div class="col m3" id="secondRowFirstDiv">
                    <h4 id="questionOneHeader">How advanced is the idea?</h4>
                </div>
                <div class="col m3" id="secondRowSecondDiv">
                    <h4 id="industrialIdeaHeader">I have an idea</h4>
                    <a class="btn btn-sm" id="industrialIdeaBtn">This One</a>
                </div>
                <div class="col m3" id="secondRowThirdDiv">
                    <h4 id="industrialDesignHeader">I have a design</h4>
                    <a class="btn btn-sm" id="industrialDesignBtn">This One</a>
                </div>
                <div class="col m3" id="secondRowFourthDiv">
                    <h4 id="industrialPrototypeHeader">I have a prototype</h4>
                    <a class="btn btn-sm" id="industrialPrototypeBtn">This One</a>
                </div>
            </div>
        </div>

        <!--Industrial Idea Row-->
        <div id="industrialIdeaRow" hidden>
            <div class="row">
                <div class="col m3" id="industrialIdeaRowFirstDiv">
                    <h4>Just an idea</h4>
                </div>
                <div class="col m9" id="industrialIdeaRowSecondDiv">
                    <h4>Please keep up the great work!</h4>
                    <h6>Contact us as soon as you have a prototype.</h6>
                </div>
            </div>
        </div>

        <!--Industrial Design Row-->
        <div id="industrialDesignRow" hidden>
            <div class="row">
                <div class="col m3" id="industrialDesignRowFirstDiv">
                    <h4>Design</h4>
                </div>
                <div class="col m9" id="industrialDesignRowSecondDiv">
                    <h4>This is great news!</h4>
                    <h6>Please give us a call.</h6>
                </div>
            </div>
        </div>

        <!--Industrial Prototype Row-->
        <div id="industrialPrototypeRow" hidden>
            <div class="row">
                <div class="col m3" id="industrialPrototypeRowFirstDiv">
                    <h4>Prototype</h4>
                </div>
                <div class="col m9" id="industrialPrototypeRowSecondDiv">
                    <h4>Awesome!</h4>
                    <h6>Apply here.</h6>
                    <a class="btn btn-sm" href="/ApplicationProcess/ApplicationFormOne">Apply</a>
                </div>
            </div>
        </div>

        <!--ICT First Row-->
        <div id="ICTFirstRow" hidden class="center-align">
            <div class="row center-align">
                <div class="col m3" id="thirdRowFirstDiv">
                    <h4 id="questionOneHeader">How advanced is the idea?</h4>
                </div>
                <div class="col m3" id="thirdRowSecondDiv">
                    <h4 id="ictIdeaHeader">I have a Tech idea</h4>
                    <a class="btn btn-sm" id="ictIdeaBtn">This One</a>
                </div>
                <div class="col m3" id="thirdRowThirdDiv">
                    <h4 id="ictDesignHeader">I have a Wire Frame</h4>
                    <a class="btn btn-sm" id="ictWireFrameBtn">This One</a>
                </div>
                <div class="col m3" id="thirdRowFourthDiv">
                    <h4 id="ictPrototypeHeader">I have a functioning app, website, platform or device.</h4>
                    <a class="btn btn-sm" id="ictApplicationBtn">This One</a>
                </div>
            </div>
        </div>

        <!--ICT Idea Row-->
        <div id="ictIdeaRow" hidden>
            <div class="row">
                <div class="col m3" id="ictIdeaRowFirstDiv">
                    <h4> I have a Tech idea </h4>
                </div>
                <div class="col m9" id="ictIdeaRowSecondDiv">
                    <h4>We host FutureMakers. Futured by BCX and you could qualify.</h4>
                    <p> Click below to apply. </p>
                    <a href="/ApplicationProcess/ApplicationFormOne">Apply</a>
                </div>
            </div>
        </div>

        <!--ICT Wire Frame Row-->
        <div id="ictWireFrameRow" hidden>
            <div class="row">
                <div class="col m3" id="ictWireFrameRowFirstDiv">
                    <h4> I have a Wire Frame </h4>
                </div>
                <div class="col m9" id="ictWireFrameRowSecondDiv">
                    <h4>We host FutureMakers. Futured by BCX and you could qualify.</h4>
                    <p> Click below to apply. </p>
                    <a href="/ApplicationProcess/ApplicationFormOne">Apply</a>
                </div>
            </div>
        </div>

        <!--ICT Prototype Row-->
        <div id="ictApplicationRow" hidden>
            <div class="row">
                <div class="col m3" id="ictApplicationRowFirstDiv">
                    <h4> I have a functioning app, website, platform or device. </h4>
                </div>
                <div class="col m9" id="ictApplicationRowSecondDiv">
                    <h4>We host FutureMakers. Futured by BCX and you could qualify.</h4>
                    <p> Click below to apply. </p>
                    <a href="/ApplicationProcess/ApplicationFormOne">Apply</a>
                </div>
            </div>
        </div>

        <!--Industrial Cancel Button-->
        <div class="center-align" hidden id="industrialCancelSection">
            <a class="btn" id="industrialCancelBtn">Not Sure?</a>
        </div>

        <!--ICT Cancel Button-->
        <div class="center-align" hidden id="ictCancelSection">
            <a class="btn" id="ictCancelBtn">Not Sure?</a>
        </div>

    </div>

    <div class="section" id="Top">

    </div>
    <div class="section" id="sectionBusiness">
        <div class="Content">
            <div class="row">
                <div class="col m6 left-align" id="colomn">
                    <h4 style="font-family:Arial ;letter-spacing: 1.5px; font-weight: normal;font-size: 24px;">What type of business ideas does Propella look for?</h4>
                    <ul>

                        <li>We ideally work with businesses or business ideas that have been tested in the market and are:</li>
                        <li>• Disruptive (SMART, out of the ordinary thinking, unique, innovative)</li>
                        <li> • Appropriate</li>
                        <li>• Scalable</li>
                        <li>• Sustainable</li>
                        <li>• Create jobs or have the ability to create jobs</li>
                        <li>• Based in Nelson Mandela Bay</li>
                    </ul>

                </div>
                <div class="col m6  left-align " id="colomn">
                    <h4 style="font-family:Arial ;letter-spacing: 2px; font-weight: normal;font-size: 24px;">We look into the following sectors : </h4>
                    <ul>
                        <li>• Renewable Energy</li>
                        <li>• Energy Efficiency</li>
                        <li>• Circular Economy</li>
                        <li>• Advanced Manufacturing</li>
                        <li>• Maritime</li>
                        <li>• Internet of Things (IoT) / Smart City Solutions</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="section right-align" id="InnovatorsSixthSection">
        <h2 id="InnovatorsSixthSectionHeader">Programmes</h2>
    </div>
    <div class="section center-align" id="InnovatorSeventhSection">
        <div row>
            <a id="bntInnovator1" class="waves-effect waves-light btn-large smartCityBtn">
                <h6 style="padding-top:100px; font-size:20px;">
                    Which programme would<br />
                    you like to know more about?
                </h6>
            </a>
            <a id="bntInnovatorTwwo" class="waves-effect waves-light white btn-large smartCityBtn"><h6 style="padding-top:100px; font-size:20px;">FutureMakers<br />Futured by BCX<br />(ICT)</h6></a>
            <a id="bntInnovator3" class="waves-effect waves-light btn-large smartCityBtn"><h6 style="padding-top:100px; font-size:20px;">Isuzu Industrial Hub</h6></a>
        </div>

    </div>
    <div class="section center-align" id="Innovator8Section">
        <div row>
            <a href="#" id="bntInnovator4" class="waves-effect waves-light btn-large smartCityBtn">
                <h6 style="padding-top:70px; font-size:20px;">FutureMakers Futured by BCX (ICT)</h6>
            </a>
            <a href="#" id="bntInnovator5" class="waves-effect waves-light grey btn-large smartCityBtn">
                <h6 style="padding-top:70px; font-size:20px;">Tell me more about the programme<br />Futured by BCX<br />(ICT)</h6>
            </a>
            <a href="#" id="bntInnovator6" class="waves-effect waves-light  btn-large smartCityBtn">
                <h6 style="padding-top:70px; font-size:20px;">What content is covered?</h6>
            </a>

            <a href="/Home/Incubatees" id="bntInnovator7" class="waves-effect waves-light white btn-large smartCityBtn">
                <h6 style="padding-top:70px; font-size:20px; color:black;">Who is currently on the programme?</h6>
            </a>
        </div>
    </div>
    <div class="section center-align" id="Innovator9Section">
        <div row>
            <a href="#" id="bntInnovator8" class="waves-effect waves-light  btn-large smartCityBtn">
                <h6 style="padding-top:70px; font-size:20px;">Isuzu Industrial Hub</h6>
            </a>
            <a href="#" id="bntInnovator9" class="waves-effect waves-light grey btn-large smartCityBtn">
                <h6 style="padding-top:70px; font-size:20px;">Tell me more about the programme<br />Futured by BCX<br />(ICT)</h6>
            </a>
            <a href="#" id="bntInnovator10" class="waves-effect waves-light  btn-large smartCityBtn">
                <h6 style="padding-top:70px; font-size:20px;">What content is covered?</h6>
            </a>
            <a href="#" id="bntInnovator11" class="waves-effect waves-light white btn-large smartCityBtn">
                <h6 style="padding-top:70px; font-size:20px; color:black;">Who is currently on the programme?</h6>
            </a>
        </div>
        <div class="section center-align" id="InnovatorParaSection">
            <p>
                Futuremakers, Futured by BCX is an intensive programme &quot;from concept to market&quot;
                process run by Propella for IT innovators.
            </p>
            <p>
                Your ticket to the programme is a great idea – coupled with the determination and
                ability to see it through to commercialisation.
            </p>
            <p>
                It could be an app, a service, or an IT application that no-one else has thought of yet.
                But, it does have to be something that would fit into the operations of Smart City. Our
                vision is to improve the lives of urban dwellers using technology.
            </p>
            <p>
                Applications open every few months, so you need to keep visiting the site to see
                when then next round has opened.
            </p>
            <p>
                The Propella team reviews the applications and selects the top 40 to present and sell
                their idea to a panel.
            </p>
            <p>
                Approximately 25 businesses will be invited on an eight week &quot;Pitch-Deck Journey&quot;
                where we prepare you to pitch your idea to a panel of sponsors, funders and
                potential clients.
            </p>
            <p>
                There is no cost to participate, but there are also no free lunches – you will be
                expected to invest at least eight hours a week in Propella workshops, and even
                longer doing your research and groundwork.
            </p>
            <p>
                If you’ve done your homework and the panel is convinced your idea has potential for
                commercialisation then you may be selected as one of the 10 entrepreneurs for the
                exciting and life-changing Stage 2 incubation journey, which is another three months
                of preparation for success.
            </p>
            <p>
                Crack the not at the end of Stage 2 to enter a deep dive with your own Project
                Manager and Mentor as they journey with you to commercialisation in Stage 3.
            </p>
            <p>
                This is the chance you&#39;ve been looking for to make your big idea a reality.
            </p>
            <p>
                Be sure to bookmark this page and to return regularly to apply for the next
                Futuremakers adventure.
            </p>
        </div>
    </div>
    
    <div class="section" id="TopImage">
    </div>
    <div class="section hidden">
        <div id="Content">
            <div class="row">
                <div class="col m5 left-align" id="TextColumn">
                    <h4 style="font-family:Arial ;letter-spacing: 2px; font-weight: normal;font-size: 24px;">I’d like to know more about the FutureMakers programme</h4>
                    <p>
                        Futuremakers, Futured by BCX is an intensive programme "from concept to market" process run by Propella for IT innovators.

                        Your ticket to the programme is a great idea – coupled with the determination and ability to see it through to commercialisation.

                        It could be an app, a service, or an IT application that no-one else has thought of yet. But, it does have to be something that would fit into the operations of Smart City. Our vision is to improve the lives of urban dwellers using technology.
                    </p>
                    <p>
                        Applications open every few months, so you need to keep visiting the site to see when then next round has opened.

                        The Propella team reviews the applications and selects the top 40 to present and sell their idea to a panel.

                        Approximately 25 businesses will be invited on an eight week "Pitch-Deck Journey" where we prepare you to pitch your idea to a panel of sponsors, funders and potential clients.
                    </p>
                    <p>
                        There is no cost to participate, but there are also no free lunches – you will be expected to invest at least eight hours a week in Propella workshops, and even longer doing your research and groundwork.

                        If you’ve done your homework and the panel is convinced your idea has potential for commercialisation then you may be selected as one of the 10 entrepreneurs for the exciting and life-changing Stage 2 incubation journey, which is another three months of preparation for success.

                        Crack the not at the end of Stage 2 to enter a deep dive with your own Project Manager and Mentor as they journey with you to commercialisation in Stage 3.
                    </p>
                    <p>
                        This is the chance you've been looking for to make your big idea a reality.

                        Be sure to bookmark this page and to return regularly to apply for the next Futuremakers adventure.
                    </p>
                </div>
                <div class="col m2"></div>
                <div class="col m6  center " id="ImagesColumn">
                    <div class="row">
                        <div class="col m5" id="FirstRowFirstImage">

                        </div>
                        <div class="col m2"></div>
                        <div class="col m5" id="FirstRowSecondImage">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col m5" id="ThirdRowFirstImage">

                        </div>
                        <div class="col m2"></div>
                        <div class="col m5" id="FourthSecondImage">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col m5" id="FivethFirstImage">

                        </div>
                        <div class="col m2"></div>
                        <div class="col m5" id="SixthRowSecondImage">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col m5" id="SeventhFirstImage">

                        </div>
                        <div class="col m2"></div>
                        <div class="col m5" id="EighthRowSecondImage">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col m5" id="NinethFirstImage">

                        </div>
                        <div class="col m2"></div>
                        <div class="col m5" id="TenthImage">

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
   
        <div class="section right-align" id="Innovator10Section">
            <h2 id="Innovators10SectionHeader">Funding Options</h2>
        </div>
        <div class="section " id="Innovator11Section">
            <div class="row" id="Innovator11SectionRow">
                <div class="col m5 " id="InnovatorsCol1">
                    <div class="row ">
                        <a class="btn btn-default blue" style="height:50px; width:450px; border-radius:10px;" id="InnovatorsCol1Btn1">Tell me more about the fund</a>
                    </div>
                    <div class="row">
                        <a class="btn btn-default grey" style="height:50px; width:450px; border-radius:10px;" id="InnovatorsCol1Btn2">Question to answer before applying</a>
                    </div>
                    <div class="row">
                        <a class="btn btn-default green" style="height:50px; width:450px; border-radius:10px;" id="InnovatorsCol1Btn3">Qualifying criteria</a>
                    </div>
                    <div class="row">
                        <a class="btn btn-default white" style="height:50px; width:450px; color: black; border-radius:10px;" id="InnovatorsCol1Btn4">Funded activities include</a>
                    </div>
                    <div class="row">
                        <a class="btn btn-default blue" style="height:50px; width:450px; border-radius:10px;" id="InnovatorsCol1Btn5">Activities exclude from funding</a>
                    </div>
                    <div class="row">
                        <a class="btn btn-default green" style="height:50px; width:450px; border-radius:10px;" id="InnovatorsCol1Btn6">How do I apply</a>
                    </div>
                </div>
                <div class="col m1 background: white" id="InnovatorsCol2">

                </div>

                <div class="col m6 left-align" id="InnovatorsCol3">
                    <div class="col m7 " id="InnovatorsCol3Para1">
                        <p id="InovatorPara1">
                        <h4 style="color:blue;">TIA SMME Seed Fund</h4>

                        Propella has been contracted by the Technology Innovation Agency (TIA) to <br />
                        implement to an SMME Seed Fund, aimed at assisting knowledge economy-based<br />
                        SMMEs in the Eastern Cape to access bridging finance to advance their innovative<br />
                        ideas to market. The monetary value of the grant funding will range from R50 000<br />
                        (minimum) to R650 000 (maximum) per project.
                        </p>
                    </div>
                    <div class="col m7 " id="InnovatorsCol3Para2">
                        <p id="InovatorPara2">
                        <h6 style="color:maroon;">
                            <b>
                                TIA seed fund proposal: please take note of the following considerations<br />
                                before completing the application form
                            </b>
                        </h6>
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
                    <div class="col m7 " id="InnovatorsCol3Para3">
                        <p id="InovatorPara3">
                            <b>Applicants must please take note of the following qualifying criteria:</b><br />
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
                    <div class="col m7 " id="InnovatorsCol3Para4">
                        <p id="InovatorPara4">
                            <b>Funding will be directed at SMMEs / Entrepreneurs requiring the following activities:</b>
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
                    <div class="col m7 " id="InnovatorsCol3Para5">
                        <p id="InovatorPara5">
                            <b>The following activities will not quality for funding support:</b>
                        <ul>
                            <li><i class="tiny material-icons">info</i> Working Capital</li>
                            <li><i class="tiny material-icons">info</i> Operation expenses</li>
                            <li>
                                <i class="tiny material-icons">info</i> Purchasing of equipment that is not within the applicant's scope of work and<br />
                                relevant to the allowable activities and objective of their application.
                            </li>
                        </ul>
                        Projects should have the potential for further investment and development by funders.<br />
                        <b>Please read the information and criteria below and contact</b><br />
                        mara@propellaincubator.co.za <b>
                            for an application form or download the <br />
                            appliaction form below if you believe you meet the requirements.
                        </b>
                        </p>
                    </div>
                    <div class="col m7 " id="InnovatorsCol3Para6">
                        <p id="InovatorPara6">

                        </p>
                    </div>
                </div>
            </div>
        </div>
      
    <div class="section" id="TopImage1">

    </div>
    <br />
    <div class="section" id="section2">
        <div class="row">
            <div class="col m4">
                <div class="row">
                    <button class="btn blue" id="PointOneBtn">If I’m interested in applying what is the process? </button>
                </div>
                <div class="row">
                    <button class="btn green" id="PointTwoBtn">My application has been submitted, what’s next? </button>
                </div>
                <div class="row">
                    <button class="btn grey" id="PointThreeBtn">If I’m accepted, what support can I expect to get?</button>
                </div>
            </div>
            <div class="col m1">

            </div>

            <div class="col m7 center-align">
                <div class="row">
                    <h5>There is a process, but it’s a quick and easy one. Take a look at the journey below.  </h5>
                    <img src="/images/Innovators/Appliaction/Process.jpg" style="height:500px; width:750px;" />
                </div>

            </div>
        </div>
    </div>
    <div class="section" id="SecondImage">
    </div>
    <br />
    <div class="section" id="section3">
        <div class="row">
            <div class="col m4">
                <div class="row">
                    <button class="btn blue" id="PointONEBtn">If I’m interested in applying what is the process? </button>
                </div>
                <div class="row">
                    <button class="btn green" id="PointTWoBtn">My application has been submitted, what’s next? </button>
                </div>
                <div class="row">
                    <button class="btn grey" id="PointTHREEBtn">If I’m accepted, what support can I expect to get?</button>
                </div>
            </div>
            <div class="col m1">

            </div>
            <div class="col m7">
                <p>
                    We will be in contact with you to let you know that we’ve received your application and what the next step is.
                </p>
                <p>
                    It may be a referral to another Enterprise Development Agency, a call to find out more or an invitation to come in for a chat.
                </p>
                <p>
                    If there is mutual interest, you will be invited to present to a Selection Panel who make the final decision regarding incubation.  And then the journey begins.
                </p>
            </div>
        </div>
    </div>

    <div class="section" id="ThirdImage">
    </div>
    <br />
    <div class="section" id="section1">
        <div class="row">
            <div class="col m4">
                <div class="row">
                    <button class="btn  blue" id="Point1Btn">If I’m interested in applying what is the process? </button>
                </div>
                <div class="row">
                    <button class="btn green" id="Point2Btn">My application has been submitted, what’s next? </button>
                </div>
                <div class="row">
                    <button class="btn grey" id="Point3Btn">If I’m accepted, what support can I expect to get?</button>
                </div>
            </div>
            <div class="col m1">

            </div>
            <div class="col m7">
                <h4>Typical support includes:</h4>
                <ul>
                    <li> Mentoring and coaching</li>
                    <li>Generic business training</li>
                    <li>Specialised business training </li>
                    <li>Access to technical training</li>
                    <li>Product development</li>
                    <li>Technology transfer</li>
                    <li>Product testing and verification</li>
                    <li>Facilitation of patent and copyright applications</li>
                    <li>Advanced market research</li>
                    <li>Interfirm comparison/benchmarking</li>
                    <li>Marketing assistance</li>
                    <li>Management system implementation</li>
                    <li>  QMS advising and implementation</li>
                    <li> Business-to-business facilitation</li>
                    <li> Facilitate access to finance</li>
                    <li>  Trade show facilitation</li>
                    <li> Export readiness assistance</li>
                </ul>
            </div>
        </div>
    </div>
    

    <div id="QuizImage">

    </div>

    <div class="center-align">
        <button class="btn" id="ReadyCheckBtn">Ready to take the Quiz?</button>
    </div>

    <div id="QuestionContent" hidden>
        <div class="row center-align">
            <div class="col m3 QuestionOneDiv">
                <h4>Have you been in business before (even if it was selling cookies)?</h4>
                <div class="row">
                    <div class="col m6">
                        <button class="btn scoreBtn QuestionOneBtn">Yes</button>
                    </div>
                    <div class="col m6">
                        <button class="btn QuestionOneBtn">No</button>
                    </div>
                </div>
            </div>
            <div class="col m3 QuestionTwoDiv" hidden>
                <h4>Is your idea or product ICT smart?</h4>
                <div class="row">
                    <div class="col m6">
                        <button class="btn scoreBtn QuestionTwoBtn">Yes</button>
                    </div>
                    <div class="col m6">
                        <button class="btn QuestionTwoBtn">No</button>
                    </div>
                </div>
            </div>
            <div class="col m3 QuestionThreeDiv" hidden>
                <h4>Do you have a working prototype?</h4>
                <div class="row">
                    <div class="col m6">
                        <button class="btn scoreBtn QuestionThreeBtn">Yes</button>
                    </div>
                    <div class="col m6">
                        <button class="btn QuestionThreeBtn">No</button>
                    </div>
                </div>
            </div>
            <div class="col m3 QuestionFourDiv" hidden>
                <h4>Have you tested the idea or product in the market?</h4>
                <div class="row">
                    <div class="col m6">
                        <button class="btn scoreBtn QuestionFourBtn">Yes</button>
                    </div>
                    <div class="col m6">
                        <button class="btn QuestionFourBtn">No</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row center-align">
            <div class="col m3 QuestionFiveDiv" hidden>
                <h4>Will it stand out from the crowd?</h4>
                <div class="row">
                    <div class="col m6">
                        <button class="btn scoreBtn QuestionFiveBtn">Yes</button>
                    </div>
                    <div class="col m6">
                        <button class="btn QuestionFiveBtn">No</button>
                    </div>
                </div>
            </div>
            <div class="col m3 QuestionSixDiv" hidden>
                <h4>Will it improve the lives of those living in towns and cities?</h4>
                <div class="row">
                    <div class="col m6">
                        <button class="btn scoreBtn QuestionSixBtn">Yes</button>
                    </div>
                    <div class="col m6">
                        <button class="btn QuestionSixBtn">No</button>
                    </div>
                </div>
            </div>
            <div class="col m3 QuestionSevenDiv" hidden>
                <h4>Can it be protected by copyright or patent?</h4>
                <div class="row">
                    <div class="col m6">
                        <button class="btn scoreBtn QuestionSevenBtn">Yes</button>
                    </div>
                    <div class="col m6">
                        <button class="btn QuestionSevenBtn">No</button>
                    </div>
                </div>
            </div>
            <div class="col m3 QuestionEightDiv" hidden>
                <h4>Do you work well with others?</h4>
                <div class="row">
                    <div class="col m6">
                        <button class="btn scoreBtn QuestionEightBtn">Yes</button>
                    </div>
                    <div class="col m6">
                        <button class="btn QuestionEightBtn">No</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row center-align">
            <div class="col m3 QuestionNineDiv" hidden>
                <h4>Do you listen to advice?</h4>
                <div class="row">
                    <div class="col m6">
                        <button class="btn scoreBtn QuestionNineBtn">Yes</button>
                    </div>
                    <div class="col m6">
                        <button class="btn QuestionNineBtn">No</button>
                    </div>
                </div>
            </div>
            <div class="col m3 QuestionTenDiv" hidden>
                <h4>Are you ready to work long hours?</h4>
                <div class="row">
                    <div class="col m6">
                        <button class="btn scoreBtn QuestionTenBtn">Yes</button>
                    </div>
                    <div class="col m6">
                        <button class="btn QuestionTenBtn">No</button>
                    </div>
                </div>
            </div>
            <div class="col m3 QuestionElevenDiv" hidden>
                <h4>Are you ready to fly through the storms that face all innovators?</h4>
                <div class="row">
                    <div class="col m6">
                        <button class="btn scoreBtn finalBtn QuestionElevenBtn">Yes</button>
                    </div>
                    <div class="col m6">
                        <button class="btn finalBtn QuestionElevenBtn">No</button>
                    </div>
                </div>
            </div>





            <div class="col m3 QuestionTwelveDiv" hidden>
                <p id="HighParagraph" hidden>That’s amazing, it’s time to have a chat.  Please tell us more (click here)</p>
                <p id="AverageParagraph" hidden>Promising, but you may need to refine your ideas and approach a little more before sharing your idea with us. </p>
                <p id="LowParagraph" hidden>Congratulations – You have made a great start on the journey to be a smart entrepreneur. However, there’s a way to go before you’re likely to be ready for incubation. </p>
            </div>
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