<?php
// check if user clicked actual movie image, redirect home if not.
if(isset($_POST["first_name"])){
    extract($_POST);
    echo "<h4>Form received at server, here's data</h4>";
    echo "First Name : " . $first_name . "<br>";
    echo "Last Name : " . $last_name . "<br>";
    echo "Email : " . $email . "<br>";
    echo "Phone : " . $phone . "<br>";
    echo "Age : " . $age . "<br>";
    echo "Address : " . $address . "<br>";
    echo "Is Enjoyed? : " . $enjoy . "<br>";
    echo "Comments : " . $comment . "<br>";
    die();
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
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.js"></script>
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
                <h2>Leave a feedback</h2>
                <div class="container">
                    <form class="well form-horizontal" action="feedback.php" method="post" id="contact_form">
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
                                <label class="col-md-4 control-label">Age</label>
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-heart"></i></span>
                                        <input name="age" placeholder="Your age" class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label">Phone</label>
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                        <input name="phone" placeholder="(845)555-1212" class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label">Address</label>
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                        <input name="address" placeholder="Address" class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                            <!-- radio checks -->
                            <div class="form-group">
                                <label class="col-md-4 control-label">Did you enjoy our website?</label>
                                <div class="col-md-4">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="enjoy" value="yes" checked /> Yes
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="enjoy" value="no" /> No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- Text area -->
                            <div class="form-group">
                                <label class="col-md-4 control-label">Comments</label>
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                        <textarea class="form-control" name="comment" placeholder="Project Description"></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- Success message -->
                            <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>
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

        </div>
    </body>

    </html>
