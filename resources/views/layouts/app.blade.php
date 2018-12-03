<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Propella Platform</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


    <link rel="stylesheet" href="/css/platform_styles.css"/>
    <link rel="stylesheet" href="/css/site.css"/>

    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>


</head>
<body>
    <div id="app">
        <div class="navbar-fixed">
            <nav class="white">
                <div class="nav-wrapper">
                    <a style="margin-left:1em;" href="/" class="brand-logo"><img src="http://thepropella.co.za/images/Demo/logos/Propella-Logo.png" /></a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="/"><i class="material-icons left">home</i>Home</a></li>
                        <li><a href="/Home/About"><i class="material-icons left">lightbulb_outline</i>About</a></li>
                        <li><a href="/Home/Partners"><i class="material-icons left">email</i>Partner</a></li>
                        <li><a href="/Home/Calendar"><i class="material-icons left">assignment</i>Calendar</a></li>
                        <li><a href="/Home/Innovators"><i class="material-icons left">bubble_chart</i>Innovators</a></li>
                        <li><a href="/Home/Categories"><i class="material-icons left">people</i>Current Ventures</a></li>
                        <li><a href="/Home/Programs"><i class="material-icons left">find_in_page</i>Programs </a></li>
                        <li><a href="/Home/SmartCity"><i class="material-icons left">domain</i>Smart City</a></li>
                    </ul>

                </div>
                <div class="row grey darken-4" style="height: 6px;">

                </div>
            </nav>
        </div>
        <ul class="sidenav" id="mobile-demo">
            <li><a href="/"><i class="material-icons left">home</i>Home</a></li>
            <li><a href="/Home/About"><i class="material-icons left">lightbulb_outline</i>About</a></li>
            <li><a href="/Home/Partners"><i class="material-icons left">email</i>Partner</a></li>
            <li><a href="/Home/Calendar"><i class="material-icons left">assignment</i>Calendar</a></li>
            <li><a href="/Home/Innovators"><i class="material-icons left">bubble_chart</i>Innovators</a></li>
            <li><a href="/Home/Categories"><i class="material-icons left">people</i>Current Ventures</a></li>
            <li><a href="/Home/Programs"><i class="material-icons left">find_in_page</i>Programs </a></li>
            <li><a href="/Home/SmartCity"><i class="material-icons left">domain</i>Smart City</a></li>
        </ul>

      <div class="container-fluid">
          @yield('content')
      </div>
    </div>
    <script src="/js/materialize.js"></script>
    <script src="/js/site.js"></script>
    <script src="/js/init.js"></script>

</body>
</html>
