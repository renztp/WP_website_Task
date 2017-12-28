<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wordpress Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/stylesheets/css/main.css">
    <!-- ICONS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <!-- BODY FONTS -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Oxygen|Roboto" rel="stylesheet"> -->
    <!-- NAVBRAND FONT -->
    <link href="https://fonts.googleapis.com/css?family=Share" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300|Quicksand" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script> 
</head>
<body>

<script>
    var server = require('http').createServer();
    var io = require('socket.io')(server);
    io.on('connection', function(client){
      client.on('event', function(data){});
      client.on('disconnect', function(){});
  });
    server.listen(3000);
</script>

    <nav class="navbar navbar-expand-lg navi-primary">
        <div class="container pl-0 pr-0">
            <a href="<?php echo home_url(); ?>" style="font-family: share;" class="navbar-brand"><img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/book-icon.svg" width="30" height="30" alt=""><b style="vertical-align: middle; font-size: 0.9em;" class="logo-label"> SpeakIn</b></a>

            <div class="collapse navbar-collapse pl-0 ml-0" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto pl-5" id="theNav" style="font-size: 0.8rem;">
                    <li class="nav-item pr-4"><a href="<?php echo home_url(); ?>" class=" nav-link">Home</a></li>
                    <li class="nav-item pr-4"><a href="<?php echo home_url(); ?>/classes/" class="nav-link">Classes</a></li>
                    <li class="nav-item pr-4"><a href="<?php echo home_url(); ?>/test/" class="nav-link">Level test</a></li>
                    <li class="nav-item pr-4"><a href="<?php echo home_url(); ?>/careers/" class="nav-link">Careers</a></li>
                    <li class="nav-item pr-4"><a href="<?php echo home_url(); ?>/aboutus/" class="nav-link">About Us</a></li>
                </ul>

                <form class="form-inline">
                    <div class="input-group border-0">
                        <input class="form-control rounded-0 border-0 ml-5 pt-1 pb-1" style="width: 9.4rem" placeholder="Search">
                        <button class="input-group-addon" id="basic-addon rounded-0 border-0"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </nav>
