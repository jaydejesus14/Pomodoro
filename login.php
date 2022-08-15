<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
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
</div>
</nav>
    <section class ="login">
    <div class="container px-5 py-5 mx-auto">
    <div class="card card0">
        <div class="d-flex flex-lg-row flex-column-reverse">
            <div class="card card1">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-10 col-10 my-5">
                        <div class="row justify-content-center px-3 mb-3">
                            <img id = "logo" src="images/logo.png">
                        </div>
                        <h3 class="mb-5 text-center heading">WELCOME BACK!</h3>
                        <hr class="solid">

                        <div class="form-group">
                            <label class="form-control-label text-muted">Username</label>
                            <input type="text" id="email" name="email" placeholder="Phone no or email id" class="form-control">
                        </div>

                        <div class="form-group">
                            <label class="form-control-label text-muted">Password</label>
                            <input type="password" id="psw" name="psw" placeholder="Password" class="form-control">
                        </div>

                        <div class="row justify-content-center my-3 px-3">
                            <button class="btn-block btn-color" id = "login_btn">Login</button>
                        </div>

                       

                        <div class="row justify-content-center my-2">
                            <a href="#"><small class="text-muted">Forgot Password?</small></a>
                        </div>
                    </div>
                </div>
                <div class="bottom text-center mb-5">
                    <p href="#" class="sm-text mx-auto mb-3">Don't have an account?<button class="btn btn-white ml-2">Create new</button></p>
                </div>
            </div>
            <div class="card card2">
                <div class="my-auto mx-md-5 px-md-5 right">
                    <h3 class="text-white">TITLE</h3>
                    <small class="text-white">desciption</small>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<?php

ECHO "Hello World!<br>";

?> 

</body>
</html>