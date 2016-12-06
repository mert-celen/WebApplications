<?php
    if(isset($_POST["username"])){
        $txt = print_r($_POST,true);
        $myfile = file_put_contents('register.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Waterford Cinemas</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.js"></script>
    <script src="js/scripts.js"></script>
</head>

<body>
    <div id="mainWrapper">
        <header>
            <ul class="nav nav-pills pull-right">
                <li><img width="64" height="64" src="img/video-camera.png" alt="Waterford Cinemas"></li>
            </ul>
            <h1 class="title">Waterford Cinemas</h1>
            <br>
            <br>
            <nav class="nav">
                <button class="btn btn-default" onclick="window.location = '/index.html'">Home</button>
                <button class="btn btn-default" onclick="window.location = '/movies.html'">Movies</button>
                <button class="btn btn-default" onclick="window.location = '/register.php'">Register</button>
                <button class="btn btn-default" onclick="window.location = '/contact.html'">Contact</button>
                <button class="btn btn-default" onclick="window.location = '/feedback.php'">Feedback</button>
                <form class="navbar-form navbar-right" action="movie.php" method="get">
                    <div class="form-group">
                        <input name="name" type="name" class="form-control" placeholder="Movie Name">
                    </div>
                    <button type="submit" class="btn btn-default">Search</button>
                </form>
            </nav>
        </header>
        <div class="content">
            <h3>Register an account</h3>
            <div class="container">
                    <form class="well form-horizontal" action="#" method="post" id="register_form">
                        <fieldset>
                            <div class="form-group">
                                <label class="col-md-4 control-label">First Name</label>
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input name="first_name" placeholder="First Name" class="form-control" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Last Name</label>
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input name="last_name" placeholder="Last Name" class="form-control" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">E-Mail</label>
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                        <input name="email" placeholder="E-Mail Address" class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Username</label>
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input name="username" placeholder="Username" class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Password</label>
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input name="password" placeholder="At least 6 characters" class="form-control" type="password">
                                    </div>
                                </div>
                            </div>
                            <!-- Success message -->
                            <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for registering</div>
                            <!-- Button -->
                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-warning">Send <span class="glyphicon glyphicon-send"></span></button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                
        </div>
                <footer>
            Mert CELEN 2016
        </footer>
    </div>
</body>

</html>
