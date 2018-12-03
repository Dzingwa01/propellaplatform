@extends('layouts.app')

@section('content')
    <link href="/templates/eventus/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <link href="/templates/eventus/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/templates/eventus/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
    <link href="/plugins/system/helix/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Oswald:300" rel="stylesheet" type="text/css" />
    <link href="/plugins/system/helix/css/mobile-menu.css" rel="stylesheet" type="text/css" />
    <link href="/templates/eventus/css/uikit.almost-flat.css" rel="stylesheet" type="text/css" />
    <link href="/templates/eventus/css/template.css" rel="stylesheet" type="text/css" />
    <link href="/templates/eventus/css/presets/preset2.css" rel="stylesheet" type="text/css" />
    <link href="http://thepropella.co.za/media/mod_mailchimpsignup/css/mailchimpsignup.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
        .container {
            max-width: 1170px
        }

        h1, h2, h3, h4, h5, h6, #sp-menu {
            font-family: 'Oswald';
        }
    </style>
    <script src="/media/jui/js/jquery.min.js?11e44edf87173a4160eabb8cc1fdd3c8" type="text/javascript"></script>
    <script src="/media/jui/js/jquery-noconflict.js?11e44edf87173a4160eabb8cc1fdd3c8" type="text/javascript"></script>
    <script src="/media/jui/js/jquery-migrate.min.js?11e44edf87173a4160eabb8cc1fdd3c8" type="text/javascript"></script>
    <script src="/plugins/system/helix/js/jquery-noconflict.js" type="text/javascript"></script>
    <script src="/media/jui/js/bootstrap.min.js?11e44edf87173a4160eabb8cc1fdd3c8" type="text/javascript"></script>
    <script src="/plugins/system/helix/js/modernizr-2.6.2.min.js" type="text/javascript"></script>
    <script src="/plugins/system/helix/js/helix.core.js" type="text/javascript"></script>
    <script src="/plugins/system/helix/js/menu.js" type="text/javascript"></script>
    <script src="/templates/eventus/js/template.js" type="text/javascript"></script>
    <script src="/templates/eventus/js/uikit.min.js" type="text/javascript"></script>
    <script src="http://thepropella.co.za/media/mod_mailchimpsignup/js/mailchimpsignup.js" type="text/javascript"></script>
    <script type="text/javascript">
        spnoConflict(function ($) {

            function mainmenu() {
                $('.sp-menu').spmenu({
                    startLevel: 0,
                    direction: 'ltr',
                    initOffset: {
                        x: 0,
                        y: 0
                    },
                    subOffset: {
                        x: 0,
                        y: 0
                    },
                    center: 0
                });
            }

            mainmenu();

            $(window).on('resize', function () {
                mainmenu();
            });


        });
    </script>
    <div class="article subpage  ltr preset2 menu-seed-funds responsive bg hfeed clearfix">
    {{--@*<div class="body-innerwrapper">--}}

        {{--<section id="sp-toolbar-wrapper"--}}
                 {{--class=" hidden-phone">--}}
            {{--<div class="container">--}}
                {{--<div class="row-fluid" id="toolbar">--}}
                    {{--<div id="sp-toolbar-r" class="span12">--}}
                        {{--<div class="module ">--}}
                            {{--<div class="mod-wrapper clearfix">--}}
                                {{--<div class="mod-content clearfix">--}}
                                    {{--<div class="mod-inner clearfix">--}}


                                        {{--<div class="custom">--}}
                                            {{--<span>--}}
                                                {{--<a href="https://www.facebook.com/Propella-Business-Incubator-1531773490473015/?fref=ts" target="_blank" class="uk-icon-button uk-icon-small uk-icon-facebook"></a><a href="https://twitter.com/PropellaHub" target="_blank" class="uk-icon-button uk-icon-small uk-icon-twitter"></a><a href="https://www.instagram.com/propellahub/" target="_blank" class="uk-icon-button uk-icon-small uk-icon-instagram"></a>--}}
                                            {{--</span>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="gap"></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</section><header id="sp-header-wrapper"--}}
                          {{--class=" ">--}}
            {{--<div class="container">--}}
                {{--<div class="row-fluid" id="header">--}}
                    {{--<div id="sp-logo" class="span3"><div class="logo-wrapper"><a href="/"><img alt="" class="image-logo" src="/images/Demo/logos/Propella-Logo.png" /></a></div></div>--}}

                    {{--<div id="sp-menu" class="span9">--}}


                        {{--<div id="sp-main-menu" class="visible-desktop">--}}
                            {{--<ul class="sp-menu level-0"><li class="menu-item first parent "><a href="http://thepropella.co.za/" class="menu-item first parent "><span class="menu"><span class="menu-title">Home</span></span></a><div class="sp-submenu"><div class="sp-submenu-wrap"><div class="sp-submenu-inner clearfix" style="width: 200px;"><div class="megacol col1 first" style="width: 200px;"><ul class="sp-menu level-1"><li class="menu-item first"><a href="/home/vision-and-mission" class="menu-item first"><span class="menu"><span class="menu-title">Vision and Mission</span></span></a></li><li class="menu-item last"><a href="/images/Propella/Propella_PAIA_Manual.pdf" target="_blank" class="menu-item last"><span class="menu"><span class="menu-title">PAIA Manual</span></span></a></li></ul></div></div></div></div></li><li class="menu-item"><a href="/get-incubated-by-propella" class="menu-item"><span class="menu"><span class="menu-title">Get Incubated</span></span></a></li><li class="menu-item"><a href="/incubator-services" class="menu-item"><span class="menu"><span class="menu-title">Incubator Services</span></span></a></li><li class="menu-item active"><a href="/seed-funds" class="menu-item active"><span class="menu"><span class="menu-title">TIA FUNDING</span></span></a></li><li class="menu-item"><a href="/ict" class="menu-item"><span class="menu"><span class="menu-title">ICT</span></span></a></li><li class="menu-item parent "><a href="/events-workshops" class="menu-item parent "><span class="menu"><span class="menu-title">Events &amp; Workshops</span></span></a><div class="sp-submenu"><div class="sp-submenu-wrap"><div class="sp-submenu-inner clearfix" style="width: 200px;"><div class="megacol col1 first" style="width: 200px;"><ul class="sp-menu level-1"><li class="menu-item first"><a href="/events-workshops" class="menu-item first"><span class="menu"><span class="menu-title">All Events</span></span></a></li><li class="menu-item"><a href="/events-workshops/past-presentations" class="menu-item"><span class="menu"><span class="menu-title">Past Presentations</span></span></a></li><li class="menu-item last"><a href="/events-workshops/propella-launch" class="menu-item last"><span class="menu"><span class="menu-title">Launch</span></span></a></li></ul></div></div></div></div></li><li class="menu-item"><a href="/latest-news" class="menu-item"><span class="menu"><span class="menu-title">Latest News</span></span></a></li><li class="menu-item"><a href="/contacts" class="menu-item"><span class="menu"><span class="menu-title">Contacts</span></span></a></li><li class="menu-item last"><a href="/gallery" class="menu-item last"><span class="menu"><span class="menu-title">Gallery</span></span></a></li></ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>*@--}}
            <br />
        </header><section id="sp-main-body-wrapper"
                          class=" ">
            <div class="container">
                <div class="row-fluid" id="main-body">
                    <div id="sp-message-area" class="span12">
                        <section id="sp-component-area-wrapper"
                                 class=" ">
                            <div class="row-fluid" id="component-area">
                                <div id="sp-component-area" class="span12">
                                    <section id="sp-component-wrapper">
                                        <div id="sp-component">
                                            <div id="system-message-container">
                                            </div>

                                            <se class="item-page post-124 post hentry status-publish category-funding ">



                                                <header class="entry-header">
                                                    <h1 class="entry-title page-header">
                                                        TIA SMME SEED FUND
                                                    </h1>

                                                </header>



                                                <section class="entry-content">
                                                    <p>
                                                        <span style="font-size: 14pt;">
                                                            <strong>
                                                                <span style="font-family: 'Century Gothic', sans-serif;">
                                                                    Please read the information and criteria below and contact <span id="cloak75d62d6000d8045a874b2f3cda9861e6">This email address is being protected from spambots. You need JavaScript enabled to view it.</span>
                                                                    <script type='text/javascript'>
                                                                        document.getElementById('cloak75d62d6000d8045a874b2f3cda9861e6').innerHTML = '';
                                                                        var prefix = '&#109;a' + 'i&#108;' + '&#116;o';
                                                                        var path = 'hr' + 'ef' + '=';
                                                                        var addy75d62d6000d8045a874b2f3cda9861e6 = 'm&#97;r&#97;' + '&#64;';
                                                                        addy75d62d6000d8045a874b2f3cda9861e6 = addy75d62d6000d8045a874b2f3cda9861e6 + 'pr&#111;p&#101;ll&#97;&#105;nc&#117;b&#97;t&#111;r' + '&#46;' + 'c&#111;' + '&#46;' + 'z&#97;';
                                                                        var addy_text75d62d6000d8045a874b2f3cda9861e6 = 'm&#97;r&#97;' + '&#64;' + 'pr&#111;p&#101;ll&#97;&#105;nc&#117;b&#97;t&#111;r' + '&#46;' + 'c&#111;' + '&#46;' + 'z&#97;'; document.getElementById('cloak75d62d6000d8045a874b2f3cda9861e6').innerHTML += '<a ' + path + '\'' + prefix + ':' + addy75d62d6000d8045a874b2f3cda9861e6 + '\'>' + addy_text75d62d6000d8045a874b2f3cda9861e6 + '<\/a>';
                                                                    </script> for an application form or download the application form below if you believe you meet the requirements.
                                                                </span>
                                                            </strong>
                                                        </span>
                                                    </p>
                                                    <p><span style="font-size: 12pt;"><a href="/images/Funding/TIA-SMME-Fund-Application.doc">Application Form :&nbsp;images/Funding/TIA-SMME-Fund-Application.doc</a></span></p>
                                                    <p>Propella Business Incubator (Pty) Ltd has been contracted by the Technology Innovation Agency (TIA) to implement an SMME Seed Fund, aimed at assisting knowledge economy-based SMMEs in the Eastern Cape to access bridging finance to advance their innovative ideas to market. &nbsp;The monetary value of the grant funding will range from R50 000 (minimum) to R650 000 (maximum) per project.</p>
                                                    <p>This Proposal Call will be limited to the following sectors: <br />• Renewable Energy<br />• Energy Efficiency<br />• Circular Economy<br />• Advanced Manufacturing<br />• Internet of Things (IoT) / Smart City Solutions.</p>
                                                    <p><span style="color: #800000;"><strong>TIA SEED FUND PROPOSAL : PLEASE TAKE NOTE OF THE FOLLOWING BEFORE COMPLETING THE APPLICATION FORM</strong></span></p>
                                                    <ul>
                                                        <li><em>Is your product / service beyond just an idea ?</em></li>
                                                        <li><em>Have you developed a prototype/minimum viable product (MVP) for your product/service/idea</em></li>
                                                        <li><em>Can you substantiate that there is a real need in the market for your product / service (have you done a market assessment and or viability study) ?</em></li>
                                                        <li><em>Is your product / service unique ? (Is it patentable?)</em></li>
                                                        <li><em>Will the product / service be developed and remain in NMB?</em></li>
                                                        <li><em>Does your product / service fall within the renewable energy, energy efficiency, circular economy, advanced manufacturing, IoT sectors ?</em></li>
                                                        <li><em>Are you prepared to participate in the Propella Incubation Programme if requested to do so?</em></li>
                                                    </ul>
                                                    <p><strong>Applicants must please take note of the following qualifying criteria:</strong><br />• The product / service must be at TRL (Technology Readiness Level) 3<br />• A basic working prototype must have been developed – i.e. you must be able to demonstrate that the prototype works<br />• The product / service must be unique / a differentiator in the market<br />• Applicants must have done a market assessment to establish a clear need for their product / service<br />• Applicants must be prepared to enter the Propella Incubation Programme</p>
                                                    <p><strong>Funding will be directed at SMMEs / entrepreneurs requiring the following activities:</strong><br />• Developing the prototype / process further to market readiness (as part of comprehensive technology package); <br />• Intellectual property (“IP”) support and sourcing of IP opinions; <br />• Production of market samples and/or associated testing; <br />• Techno-economic evaluation studies; <br />• Conducting field studies to further develop the technology, market and/or customer needs; <br />• Refining and implementing designs; <br />• Support of certification activities; <br />• Piloting outputs and technology scale-up and techno-economic evaluation; <br />• Business plan development</p>
                                                    <p><strong>The following activities will not qualify for funding support:</strong><br />• Working Capital<br />• Operational expenses<br />• Purchasing of equipment that is not within the applicant’s scope of work and relevant to the allowable activities and objective of their application.</p>
                                                    <p>Projects&nbsp;should&nbsp;have the potential for further investment and development by funders.</p>
                                                    <p>&nbsp;</p>

                                                    <p>&nbsp;</p>
                                                    <p style="text-align: center;"><span style="color: #ff0000; font-size: 14pt;">FUNDING WINDOW IS NOW CLOSED</span></p>
                                                    <p style="text-align: center;"><strong><span style="font-size: 12pt; font-family: 'Century Gothic', sans-serif; color: #ff0000;"></span></strong></p>
                                                    <p style="text-align: center;"><span style="color: #ff0000; font-size: 12pt;"></span></p>
                                                    <p>&nbsp;</p>







                                                    </footer>
                                                </section>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section><section id="sp-bottom-2-wrapper"
                           class=" ">
            <div class="container">
                <div class="row-fluid" id="bottom-2">
                    <div id="sp-bottom7" class="span3">
                        <div class="module title1">
                            <div class="mod-wrapper-flat clearfix">
                                <h3 class="header">
                                    <span>Contacts</span>
                                </h3>
                                <span class="sp-badge title1"></span>

                                <div class="customtitle1">
                                    <div style="text-align: left;">
                                        For general information about the Propella Business Incubator, please contact us at:<br /><i style="" class="icon-envelope "></i> &nbsp;<span id="cloak5b6183407e61d75b36c4e3f91292e613">This email address is being protected from spambots. You need JavaScript enabled to view it.</span>
                                        <script type='text/javascript'>
                                            document.getElementById('cloak5b6183407e61d75b36c4e3f91292e613').innerHTML = '';
                                            var prefix = '&#109;a' + 'i&#108;' + '&#116;o';
                                            var path = 'hr' + 'ef' + '=';
                                            var addy5b6183407e61d75b36c4e3f91292e613 = '&#101;f&#105;sch&#97;t' + '&#64;';
                                            addy5b6183407e61d75b36c4e3f91292e613 = addy5b6183407e61d75b36c4e3f91292e613 + 'pr&#111;p&#101;ll&#97;&#105;nc&#117;b&#97;t&#111;r' + '&#46;' + 'c&#111;' + '&#46;' + 'z&#97;';
                                            var addy_text5b6183407e61d75b36c4e3f91292e613 = '&#97;n&#105;t&#97;' + '&#64;' + 'pr&#111;p&#101;ll&#97;&#105;nc&#117;b&#97;t&#111;r' + '&#46;' + 'c&#111;' + '&#46;' + 'z&#97;'; document.getElementById('cloak5b6183407e61d75b36c4e3f91292e613').innerHTML += '<a ' + path + '\'' + prefix + ':' + addy5b6183407e61d75b36c4e3f91292e613 + '\'>' + addy_text5b6183407e61d75b36c4e3f91292e613 + '<\/a>';
                                        </script><br /><i style="" class="icon-phone "></i>&nbsp; +27 41 502 3700<br /><i style="" class="icon-print "></i>&nbsp; 0861 55 55 33<br /><i style="" class="icon-building "></i> &nbsp;Humerail Business Park, Oakworth Drive, Humewood 6001
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gap"></div>
                    </div>

                    <div id="sp-bottom8" class="span9">
                        <div class="module ">
                            <div class="mod-wrapper-flat clearfix">
                                <h3 class="header">
                                    <span>Subscribe to our Newsletter!</span>
                                </h3>
                                <script type="text/javascript">
                                    var mcSignupBaseUrl = "http://thepropella.co.za/";
                                    var mcSignupErrorNotANumber = "must be a number.";
                                    var mcSignupErrorInvalidEmail = "Please enter a valid email address.";
                                    var mcSignupErrorRequired = "is required.";
                                </script>
                                <div id="mcSignupModule_4319" data-id="4319" class="mcSignupModule ">
                                    <div class="intro">Subscribe to our Newsletter to receive all the latest News        </div>    <div class="mcSignupFormWrapper">
                                        <form action="http://thepropella.co.za/seed-funds" method="post" id="mcSignupForm_4319" class="mcSignupForm" name="mcSignupForm4319" onsubmit="return false;">
                                            <div>
                                                <input type="text" name="fields[EMAIL]" class="submitInt inputbox mcSignupRequired" value="" title="Email Address *" placeholder="Email Address *" />
                                            </div>                <input type="hidden" name="email_type" value="html" />                            <div id="outro1_4319" class="outro1">
                                                <div class="outro">Your contact email will never be shared with a third party.</div>
                                            </div>
                                            <div>
                                                <input type="button" class="button mcSignupSubmit" value="Subscribe" data-id="4319" />
                                            </div>
                                            <input type="hidden" name="uid" value="0" />
                                            <input type="hidden" name="ip" value="196.15.219.42" />
                                            <input type="hidden" name="itemId" value="347" />
                                            <input type="hidden" name="title" value="Subscribe to our Newsletter!" />
                                            <input type="hidden" name="5f66bc971306eff5054ceb36865319f2" value="1" />
                                        </form>
                                    </div>
                                    <div class="ajaxLoader"></div>
                                    <img src="http://thepropella.co.za/media/mod_mailchimpsignup/images/ajax-loader.gif" alt="Please wait" style="display: none;" />
                                    <div class="mcSignupResult" style="display:none;"></div>
                                    <div class="mcSignupTryAgainWrapper" style="display:none;">
                                        <a href="#" class="mcSignupTryAgain" data-id="4319">
                                            Try again
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gap"></div>
                    </div>
                </div>
            </div>
        </section><footer id="sp-footer-wrapper"
                          class=" ">
            <div class="container">
                <div class="row-fluid" id="footer">
                    <div id="sp-footer1" class="span8"><span class="copyright">Copyright ©  2018 Propella.</span><a href="http://www.joomshaper.com" title="joomshaper.com"></a></div>

                    <div id="sp-footer2" class="span4"><a class="sp-totop" href="javascript:;" title="Goto Top" rel="nofollow"><small>Goto Top </small><i class="icon-caret-up"></i></a></div>
                </div>
            </div>
        </footer>

        <a class="hidden-desktop btn btn-inverse sp-main-menu-toggler" href="#" data-toggle="collapse" data-target=".nav-collapse">
            <i class="icon-align-justify"></i>
        </a>

        <div class="hidden-desktop sp-mobile-menu nav-collapse collapse">
            <ul class=""><li class="menu-item first parent"><a href="http://thepropella.co.za/" class="menu-item first parent"><span class="menu"><span class="menu-title">Home</span></span></a><span class="sp-menu-toggler collapsed" data-toggle="collapse" data-target=".collapse-101"><i class="icon-angle-right"></i><i class="icon-angle-down"></i></span><ul class="collapse collapse-101"><li class="menu-item first"><a href="/home/vision-and-mission" class="menu-item first"><span class="menu"><span class="menu-title">Vision and Mission</span></span></a></li><li class="menu-item last"><a href="/images/Propella/Propella_PAIA_Manual.pdf" target="_blank" class="menu-item last"><span class="menu"><span class="menu-title">PAIA Manual</span></span></a></li></ul></li><li class="menu-item"><a href="/get-incubated-by-propella" class="menu-item"><span class="menu"><span class="menu-title">Get Incubated</span></span></a></li><li class="menu-item"><a href="/incubator-services" class="menu-item"><span class="menu"><span class="menu-title">Incubator Services</span></span></a></li><li class="menu-item active"><a href="/seed-funds" class="menu-item active"><span class="menu"><span class="menu-title">TIA FUNDING</span></span></a></li><li class="menu-item"><a href="/ict" class="menu-item"><span class="menu"><span class="menu-title">ICT</span></span></a></li><li class="menu-item parent"><a href="/events-workshops" class="menu-item parent"><span class="menu"><span class="menu-title">Events &amp; Workshops</span></span></a><span class="sp-menu-toggler collapsed" data-toggle="collapse" data-target=".collapse-158"><i class="icon-angle-right"></i><i class="icon-angle-down"></i></span><ul class="collapse collapse-158"><li class="menu-item first"><a href="/events-workshops" class="menu-item first"><span class="menu"><span class="menu-title">All Events</span></span></a></li><li class="menu-item"><a href="/events-workshops/past-presentations" class="menu-item"><span class="menu"><span class="menu-title">Past Presentations</span></span></a></li><li class="menu-item last"><a href="/events-workshops/propella-launch" class="menu-item last"><span class="menu"><span class="menu-title">Launch</span></span></a></li></ul></li><li class="menu-item"><a href="/latest-news" class="menu-item"><span class="menu"><span class="menu-title">Latest News</span></span></a></li><li class="menu-item"><a href="/contacts" class="menu-item"><span class="menu"><span class="menu-title">Contacts</span></span></a></li><li class="menu-item last"><a href="/gallery" class="menu-item last"><span class="menu"><span class="menu-title">Gallery</span></span></a></li></ul>
        </div>

    </div>
    </div>
@endsection