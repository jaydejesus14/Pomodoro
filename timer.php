<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel='stylesheet' href="style.css">
    
</head>
<body>
    <nav class="navbar sticky-top row navbar-light bg-light " id="navStyle">
                                <div class="col-12 col-md-3">
                                    <div class="navbar-brand">
                                        <Link to="/">
                                            <img src="images/logo.png" alt="Pivot" width="30px" height="100%" id="createMarginLeft"/>
                                            <span id="createMargin">PIVOT</span>
                                        </Link>
                                    </div>
                                </div>
                                <div class="col-12 col-md-5">
                                    <ul class="nav justify-content-center">

                                        <li class="nav-item">
                                            <a href='' class="btn" role="button" id="nav_btn" aria-disabled="true"><i id="createMargin" class="fa fa-clock"></i>Timer</a>
                                        </li>
                                        <li className="nav-item">
                                            <a href='' class="btn" role="button" id="nav_btn" aria-disabled="true" ><i id="createMargin" class="fa fa-list-alt"></i>To-Do</a>
                                        </li>
                                        <li className="nav-item">
                                            <a href='' class="btn" role="button" id="nav_btn" aria-disabled="true" ><i id="createMargin" class="fa fa-list"></i>Routines</a>
                                        </li>
                                        <li className="nav-item">
                                            <a href='' class="btn" role="button" id="nav_btn" aria-disabled="true" ><i id="createMargin" class="fa fa-calendar"></i>Calendar</a>
                                        </li>
                                        <li className="nav-item">
                                            <a href='' class="btn" role="button" id="nav_btn" aria-disabled="true" ><i id="createMargin" class="fa fa-question"></i>FAQ</a>
                                        </li>
                                        
                                        <div class="dropdown" id="createMarginLeft">
                                            <button id="dropdown" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"  aria-expanded="false"><i id="createMargin" class="fa fa-user-circle"></i>
                                        </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">HTML</a></li>
                                                <li><a href="#">CSS</a></li>
                                                <li><a href="#">JavaScript</a></li>
                                            </ul>
                                            </div>
    </nav>

    <section class ="timer">
    <div class="container px-5 py-5 mx-auto">
   
        
        <div class="container d-flex justify-content-around ">
        
            <div class = "row justify-content-md-center text-center mx-auto">
                <div class = "col">
                    <div class = "currentSession text-center">
                    POMODORO
                    </div>
                </div>
                <div class = "col-6 mx-auto">
                    <div class = "nextSession text-center">
                        BREAK
                    </div>
                </div>
                </div>
            </div>

            <div class="card timers mx-auto">
                <div class = "row justify-content-md-center text-center ml-auto mr-3 mb-1">
                        <div class = "col ">
                            <div class = "settingsIcon">
                            <i class="fa fa-cog" id="timerIcons" style="font-size:24px"></i>
                        </div>
                        </div>
                    </div>
                <div class = "row justify-content-md-center text-center mx-auto">
                    <div class = "col">
                        <div class = "time text-center">
                            <span class = "timeNumber">
                                25:00
                        </span>
                        </div>

                 <!-- Start Pause and Skip Buttons !-->
                <div class = "row justify-content-md-center text-center mx-auto">
                    <div class="col">
                    </div>
                    <div class="col">
                        <button class="btn-block" id = "timerStart_btn">
                            START
                        </button>
                    </div>
                    <div class="col">
                    <!-- During Pause Skip Icon:

                        <button class="btn-block" id = "skip_btn">
                    <i class="fa fa-fast-forward" id = "timerIcons" style="font-size:30px"></i>
                        </button>
                        !-->
                    
                    </div>
                </div>
            </div>          
                  
</div>
</div>
        <div class = "row justify-content-md-center text-center mx-auto">
                    <div class = "col mt-3">
                        <div class = "currentSessionName">
                        SESSION NAME
                        </div>
                        <hr class="solid" id="hrWhite">

                    </div>

        </div>

</section>


<?php



?> 

</body>
</html>