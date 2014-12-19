<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap-theme.min.css">

        <link href='http://fonts.googleapis.com/css?family=Questrial|Ubuntu|Maven+Pro' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="/css/main.css">
        <link rel="stylesheet" href="/font_awesome/css/font-awesome.min.css">

        <title>Kid Atvs</title>
        
    </head>
    <body>


<!------------------------------------- Navbar -------------------------------->
        <nav class="navbar navbar-default home" role="navigation">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="{{action('HomeController@showHome')}}">Kid-Atvs.com</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a class="nav-font" href="{{action('HomeController@showAbout')}}"><i class="fa fa-info"></i> About Us</a></li>
                <li><a class="nav-font" href="{{action('HomeController@showContact')}}"><i class="fa fa-envelope xs"></i> Contact Us</a></li>
                <li><a class="nav-font" href="{{action('HomeController@showPolicy')}}"><i class="fa fa-book"></i> Warranty & Policies</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-bicycle xs"></i> Vehicles <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a class="nav-font" href="{{action('HomeController@showAtvs')}}">Kids Atvs</a></li>
                    <li><a class="nav-font" href="{{action('HomeController@showDirtbikes')}}">Kids Dirtbikes</a></li>
                    <li><a class="nav-font" href="{{action('HomeController@showKarts')}}">Kids Go-Karts</a></li>
                    <li><a class="nav-font" href="{{action('HomeController@showUtility')}}">Utility Vehicles</a></li>
                  </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>


         <section class="module parallax parallax-1">
            <div class="container_home">
            <h1>ATVS</h1>
          </div>
        </section>

        <section class="module content">
          <div class="container">
            <h2><a href="{{{action('HomeController@showAtvs')}}}">View Atvs</a></h2>
            <p class="p_home"><strong><span class="emphasize">Kid-ATVs.com<span></strong> is the 
                  <strong>#1 distributor</strong> of kids atvs, dirt-bikes, and go-karts and we are 
                  determined to give you the <strong>highest quality</strong> at the 
                  <em>lowest price</em>! <br> <span class="small"> *Scroll to see more</span></p>
          </div>
        </section>

        <section class="module parallax parallax-2">
          <div class="container">
            <h1>DIRTBIKES</h1>
          </div>
        </section>

        <section class="module content">
          <div class="container">
            <h2><a href="{{{action('HomeController@showDirtbikes')}}}">View Dirtbikes</a></h2>
            <p class="p_home">Every kids atv you see here will come with a free 24 month warranty and all of our 
                products are shipped directly from the warehouse to your front door free shipping, 
                no extra cost! If you find a lower price we'll beat it!</p>
          </div>
        </section>

        <section class="module parallax parallax-3">
          <div class="container">
            <h1>GO-KARTS</h1>
          </div>
        </section>

        <section class="module content">
          <div class="container">
            <h2><a href="{{{action('HomeController@showKarts')}}}">View Go-Karts</a></h2>
            <p class="p_home">Go where adventure lives with an off-road vehicle designed for exhilaration. On the trail, in the mud or around the track, discover why the ride says it all. Full independent Dual A-Arm suspension with Spring Coil Over Shocks on all units and Remote control safety features on all smaller units are just a few features we offer.</p>
          </div>
        </section>

<!-- Bottom Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>

