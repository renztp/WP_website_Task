<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/style.css">
    <!-- ICONS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <!-- BODY FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Oxygen|Quicksand|Roboto" rel="stylesheet">
    <!-- NAVBRAND FONT -->
    <link href="https://fonts.googleapis.com/css?family=Share" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script> 

</head>
<body>

    <header>
        <div class="container">
            <div class="row p-1">
                <div class="col-md-6 text-left">
                    <a href="#" class="pr-3"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="pr-3"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="pr-3"><i class="fa fa-instagram"></i></a>
                    <a href="#" class="pr-3"><i class="fa fa-google-plus"></i></a>
                </div>
                <div class="col-md-6 text-right">
                    <a href="#" class="pl-3"><i class="fa fa-phone"><span> 111 - 222 - 333</span></i></a>
                    <a href="#" class="pl-3"><i class="fa fa-map-marker"><span> US, NYC</span></i></a>
                </div>
            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a href="#" style="font-family: share; color: #777" class="navbar-brand"><i class="fa fa-book"> </i> SpeakIn</a>
            <button class="navbar-toggler bg-danger" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> 
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto" style="font-size: 0.8rem;">
                    <li class="nav-item pr-3"><a href="<?php echo home_url();?>" class="nav-link text-secondary">Home</a></li>
                    <li class="nav-item pr-3"><a href="<?php echo home_url(); ?>" class="nav-link text-secondary">Classes</a></li>
                    <li class="nav-item pr-3"><a href="<?php echo home_url(); ?>" class="nav-link text-secondary">Level test</a></li>
                    <li class="nav-item pr-3"><a href="<?php echo home_url(); ?>" class="nav-link text-secondary">Review</a></li>
                    <li class="nav-item pr-0"><a href="<?php echo home_url(); ?>" class="nav-link text-secondary">About Us</a></li>
                </ul>
                <form class="form-inline my-1 my-lg-0">
                  <input class="form-control mr-sm-2 pb-1 pt-1 theborder" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn my-2 my-sm-0 bg-dark text-light pt-1 pb-1 theborder" type="submit">Search</button>
              </form>
          </div>
      </div>
    </nav>

    
