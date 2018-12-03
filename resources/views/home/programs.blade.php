@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="/css/Programs/main.css" />

<div class="section center-align" id="ProgramsSection">
    <div id="programsImage" class="center">
        <h4 id="ProgramsHeader">PROGRAMMES</h4>
    </div>
    <br />

    <div id="AboutSectionContent">
        <div class="row ">
            <div class="col m4 left-align">
                <h4 id="Program1" align="center">ABOUT</h4>
                <p class="ProgramP1" align="center">
                    ICT and Industrial programmes.
                </p>
            </div>
            <br />
            <br />
            <div class="col m8 center-align">
                <div class="row">
                    <a class="waves-effect waves-light green darken-3 btn-large programsbtn hoverable" id="Stage0"><i class="material-icons right"></i><h5 style="padding-top:50px;">STAGE 0</h5></a>
                    <a class="waves-effect waves-light grey darken-1 btn-large programsbtn hoverable" id="Stage1"><i class="material-icons right"></i><h5 style="padding-top:50px;">STAGE 1</h5></a>
                    <a class="waves-effect waves-light blue darken-3 btn-large programsbtn hoverable" id="Stage2"><i class="material-icons right"></i><h5 style="padding-top:50px;">STAGE 2</h5></a>
                    <a class="waves-effect waves-light white darken-3 black-text btn-large programsbtn hoverable" id="Stage3"><i class="material-icons right"></i><h5 style="padding-top:50px;color:black;">STAGE 3</h5></a>

                </div>
            </div>

        </div>
    </div>
</div>

<div class="row" id="Stage0Row">
    <div id="Zero"></div>
    <br />
    <div class="RowMargins">
        <div class="col s12 m3">
            <div class="card green darken-4">
                <div class="card-content white-text">
                    <span class="card-title">STAGE 0</span>
                </div>
            </div>
        </div>
        <div class="col s12 m9">
            <div class="card white darken-1">
                <div class="card-content black-text">
                    <p>
                        <br />
                        <br />
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<a style="margin-left:50%" class="black-text" href="#AboutSectionContent"><i class="material-icons large scroll-icon">arrow_drop_up_circle</i></a>


<div class="row" id="Stage1Row">
    <div id="One"> </div>
    <br />
    <div class="RowMargins">
        <div class="col s12 m3">
            <div class="card grey darken-2">
                <div class="card-content white-text">
                    <span class="card-title">STAGE 1</span>
                </div>
            </div>
        </div>
        <div class="col s12 m9">
            <div class="card white darken-1">
                <div class="card-content black-text">
                    <p>
                        <br />
                        <br />
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row RowMargins">
    <div class="col s12 m3">
        <div class="card hoverable">
            <div class="" style="background-color:white; height: 90px;border: 2px solid black;">
                <div class="card-content white-text">
                    <span class="card-title"><font color="black"><b>BUSINESS</b></font></span>
                </div>
            </div>
            <div class="card-content black-text">
                <p>
                    How do you scale your business?
                    <br />
                    <br />
                </p>
            </div>
            <div class="card white darken-1">
                <div class="card-content black-text">
                    <p><b>Sessions 1-4</b></p>
                    <p>Elevator Pitch/Design Thinking</p>
                    <p>Purpose and Positioning(Golden Circle)</p>
                    <p>Value Proposition</p>
                    <p>SWOT & Business Model Canvas(BMC)</p>

                </div>
            </div>
        </div>
    </div>

    <div class="col s12 m3">
        <div class="card hoverable">
            <div class="" style="background-color:white; height: 90px;border: 2px solid black;">
                <div class="card-content white-text">
                    <span class="card-title"><font color="black"><b>CUSTOMER</b></font></span>
                </div>
            </div>
            <div class="card-content black-text">
                <p>
                    Who is your customer and what can your product or service do for them?
                </p>
            </div>
            <div class="card white darken-1">
                <div class="card-content black-text">
                    <p><b>Sessions 5</b></p>
                    <p>Cusomer Validations</p>
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                </div>
            </div>
        </div>
    </div>

    <div class="col s12 m3">
        <div class="card hoverable">
            <div class="" style="background-color:white; height: 90px;border: 2px solid black;">
                <div class="card-content white-text">
                    <span class="card-title"><font color="black"><b>PRODUCT</b></font></span>
                </div>
            </div>
            <div class="card-content black-text">
                <p>
                    How does your product or service make money?
                </p>
            </div>
            <div class="card white darken-1">
                <div class="card-content black-text">
                    <p><b>Sessions 6</b></p>
                    <p>Revenue Streams</p>
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                </div>
            </div>
        </div>
    </div>

    <div class="col s12 m3">
        <div class="card hoverable">
            <div class="" style="background-color:white; height: 90px;border: 2px solid black;">
                <div class="card-content white-text">
                    <span class="card-title"><font color="black"><b>ENTREPRENEUR</b></font></span>
                </div>
            </div>
            <p>
                <br />
                <br />
                <br />
            </p>
            <div class="card white darken-1">
                <div class="card-content black-text">
                    <p><b>Sessions 7-9</b></p>
                    <p>Pitch Preparation (Go To Market Plan)</p>
                    <p>Pitch Practice</p>
                    <p>Pitching Week</p>
                    <br />
                    <br />
                </div>
            </div>
        </div>
    </div>
</div>
<a style="margin-left:50%" class="black-text" href="#AboutSectionContent"><i class="material-icons large scroll-icon">arrow_drop_up_circle</i></a>
<br />


<div class="row" id="Stage2Row">
    <div id="Two"> </div>
    <br />
    <div class="RowMargins">
        <div class="col s12 m3">
            <div class="card blue darken-4">
                <div class="card-content white-text">
                    <span class="card-title">STAGE 2</span>
                </div>
            </div>
        </div>
        <div class="col s12 m9">
            <div class="card white darken-1">
                <div class="card-content black-text">
                    <p>
                        <br />
                        <br />
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row RowMargins">
    <div class="col s12 m3">
        <div class="card hoverable">
            <div class="" style="background-color:white; height: 90px;border: 2px solid black;">
                <div class="card-content white-text">
                    <span class="card-title"><font color="black"><b>BUSINESS</b></font></span>
                </div>
            </div>
            <div class="card-content black-text">
                <p><b>Session 8</b></p>
                <p><b>BUSINESS - Marketing</b></p>
                <p>One-to-many</p>
                <p>Marketing Prospecting(Inbound and Outbound)</p>
                <p>Marketing Nurturing</p>
                <p>Marketing and Sales Processes and Skills</p>
                <p>One-to-one</p>
                <p>Digital presence - Personal(week 8)</p>
                <p>Digital presence - Company(week 8)</p>
                <br />
                <p><b>Session 9 and 10</b></p>
                <p><b>BUSINESS - Financial</b></p>
                <p>One-to-many</p>
                <p>Accounting basics (week 9)</p>
                <p>Business compliance (week 10)</p>
                <p>One-to-one</p>
                <p>Initial Funding Requirements</p>
                <p>Revenue Canvas</p>
                <br />
                <br />
            </div>
        </div>
    </div>

    <div class="col s12 m3">
        <div class="card hoverable">
            <div class="" style="background-color:white; height: 90px;border: 2px solid black;">
                <div class="card-content white-text">
                    <span class="card-title"><font color="black"><b>CUSTOMER</b></font></span>
                </div>
            </div>
            <div class="card-content black-text">
                <p><b>Section 6 and 7</b></p>
                <p>One-to-many</p>
                <p>Customer Development Model (CDM)</p>
                <p>Customer Discovery</p>
                <p>Customer Validation</p>
                <p>Consultative Selling</p>
                <p>One-to-many</p>
                <p>Draw up a questionaire (week 6)</p>
                <p>Compile a database (week 6)</p>
                <p>Interview at least SIX prospects (week 7)</p>
                <p>Analyse the results (week 7)</p>
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />

            </div>

        </div>
    </div>

    <div class="col s12 m3">
        <div class="card hoverable">
            <div class="" style="background-color:white; height: 90px;border: 2px solid black;">
                <div class="card-content white-text">
                    <span class="card-title"><font color="black"><b>PRODUCT</b></font></span>
                </div>
            </div>
            <div class="card-content black-text">
                <p><b>Section 2 through to 5</b></p>
                <p>One to many</p>
                <p>Theory and Practical Example</p>
                <p>One-to-many</p>
                <p>Process Mapping (week 3)</p>
                <p>Wireframing (week 4)</p>
                <p>Prototyping (week 5)</p>
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
            </div>

        </div>
    </div>
    <div class="col s12 m3">
        <div class="card hoverable">
            <div class="" style="background-color:white; height: 90px;border: 2px solid black;">
                <div class="card-content white-text">
                    <span class="card-title"><font color="black"><b>ENTREPRENEUR</b></font></span>
                </div>
            </div>
            <div class="card-content black-text">
                <p><b>Session 1</b></p>
                <p>One-to-many</p>
                <p>Presentation Skills</p>
                <p>Review agreed "pitch"</p>
                <p>One-to-many</p>
                <p>Feedback from Phase 1 Panel</p>
                <p>Review "pitches" from Phase 1</p>
                <br />
                <p><b>Session 11</b></p>
                <p>One-to-many</p>
                <p>Pitch Preparation</p>
                <p>One-to-one</p>
                <p>Value Proposition (week 11)</p>
                <p>Pitch Preparation (week 11)</p>
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
            </div>
        </div>
    </div>
</div>
<a style="margin-left:50%" class="black-text" href="#AboutSectionContent"><i class="material-icons large scroll-icon">arrow_drop_up_circle</i></a>
<br />


<div class="row" id="Stage3Row">
    <div id="Three"></div>
    <br />
    <div class="RowMargins">
        <div class="col s12 m3">
            <div class="card white darken-1">
                <div class="card-content black-text">
                    <span class="card-title">STAGE 3</span>
                </div>
            </div>
        </div>
        <div class="col s12 m9">
            <div class="card white darken-1">
                <div class="card-content black-text">
                    <p>
                        <br />
                        <br />
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<a style="margin-left:50%" class="black-text" href="#AboutSectionContent"><i class="material-icons large scroll-icon">arrow_drop_up_circle</i></a>



<div id="ProgramsImage2">

</div>

<script>
    $(document).ready(function () {
        $('#Stage0').on('click', function () {
            location.href = "#Stage0Row";
        });

    });

    $(document).ready(function () {
        $('#Stage1').on('click', function () {
            location.href = "#Stage1Row";
        });

    });

    $(document).ready(function () {
        $('#Stage2').on('click', function () {
            location.href = "#Stage2Row";
        });

    });

    $(document).ready(function () {
        $('#Stage3').on('click', function () {
            location.href = "#Stage3Row";
        });

    });

</script>
@endsection
