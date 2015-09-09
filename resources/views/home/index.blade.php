<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="description" content="">   
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Area</title>

    <!-- Author -->
    <link type="text/plain" rel="author" href="/humans.txt" />   
    
    <link rel="stylesheet" href="/styles/vendor.css">

    <!-- Favicons -->     

    <!-- Google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="/styles/style.css">

    <link rel="stylesheet" type="text/css" href="/css/magnific-popup.css">

    <script src="/scripts/modernizr.js"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    
    <header>
        
            <nav class="navbar navbar-fixed-top navbar-default" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1 class="logo">Area</h1>
                    </div>
                
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">            
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#studio">Studio</a></li>
                            <li><a href="#attivita">Attività</a></li>
                            <li><a href="#contatti">Contatti</a></li>                
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </nav>
        
    </header>

    <div class="main container">

    <section id="opening">
        <div class="row slogan">
            <div class="col-xs-12">
                <h3>
                    {!! $texts['slogan']['value'] !!}
                </h3>
            </div>
        </div> <!-- end of slogan -->

        <div class="row about">
            <div class="col-xs-12">
                <p>                    
                    {!! $texts['block_1']['value'] !!}
                </p>
            </div>
        </div>

        @include('home.partials.slideshow')

        <div class="row about">
            <div class="col-xs-12">
                <p>                    
                    {!! $texts['block_2']['value'] !!}
                </p>
            </div>
        </div>
    </section> <!-- end of opening -->

    <section id="studio">
        <div class="row">
            <div class="col-xs-12">
                <h2>Studio</h2>
            </div>

            @foreach ($staff as $member) 
                        <div class="col-xs-12 team-member">
                            <h3 class="team-member-name">{{ $member->name }}</h3>
                            <div class="team-member-box">
                                <p class="team-member-short">
                                    {{ $member->intro }}
                                </p>
                            </div>
                        </div>
            @endforeach

            

        </div>
    </section> <!-- end of studio section -->

    <section id="attivita">
        <div class="row">
            <div class="col-xs-12">
                <h2>Attività</h2>
            </div>

            <div id="load-more-activities-url" style="display:none">{{formatLoadMoreUrl($activities->nextPageUrl())}}</div>

            <div class="activities-container">
            @include('home.partials.activities')
            </div>

            @if($activities->hasMorePages())
                <span class="load-more-activities">Visualizza di più</span>
            @endif

            
        </div>
    </section> <!-- end of attivita section -->


    </div> <!-- end of main container -->

    <footer id="contatti">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2>Contatti</h2>
                </div>

                <div class="col-xs-12">
                    <img src="img/footer-logo.png" alt="">
                </div>
                
                <div class="col-sm-4">
                    <p class="address">{!! $texts['address']['value'] !!}</p>
                </div>
                <div class="col-sm-4">
                    <p class="email">{!! $texts['mail']['value'] !!}</p>
                </div>
                <div class="col-sm-4">
                    <p class="telephone">{!! $texts['tel']['value'] !!}</p>
                </div>
                
            </div>
        </div>
    </footer>

  
  
    <script src="/scripts/vendor.js"></script>
    <script type="text/javascript" src="/js/jquery.magnific-popup.min.js"></script>

    <script src="/scripts/main.js"></script>
    <script src="/js/main.js"></script>

    <div class="hidden-galleries">

    @include('home.partials.gallery-partial-main') 

    </div>
    
  </body>
</html>