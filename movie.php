<?php
// check if user clicked actual movie image, redirect home if not.
if (!isset($_GET["name"])) {
    die("<meta http-equiv='refresh' content='0;url=index.html'>");
}
// Let's get data from api.

// Extract movie name from get request.
$name = $_GET["name"];
$name = str_replace(" ", "%20", $name);

// Let's create out request link.

// Api key, free and obtained from https://www.themoviedb.org/documentation/api
$api_key = "b31246c88590b689d1720acab7be50f4";

$query = "http://api.themoviedb.org/3/search/movie?api_key=" . $api_key . "&query=" . $name;

// request data from api
$string = file_get_contents($query);

// parse data
$string = json_decode($string);
$data = $string->results[0];

// it's just double check, if movie couldn't find on api. It's obviously won't be problem for already 
// added movies, it's just check for if user wants write movie name by own.
if ($string->total_results == 0) {
    die("<meta http-equiv='refresh' content='0;url=movies.html'>");
}

// Now that we searched movie in api and got results, now let's get movie details from another api call.

$string = file_get_contents("https://api.themoviedb.org/3/movie/" . $data->id . "/credits?api_key=" . $api_key);
$string = json_decode($string);
// we can get special data from parsed json and put it in variables for easier access.

$name = $data->original_title;
$moviePicture = "https://image.tmdb.org/t/p/w780" . $data->poster_path;
$movieWallpaper = "https://image.tmdb.org/t/p/w780" . $data->backdrop_path;
$plot = $data->overview;
$people = array_slice($string->cast, 0, 4);

// now that everything is done, we can continue with html5, and put data inside html tags with php.
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
<center><span class="movieTitle"><?= $name ?></span></center>

<div id="wrapper">
    <table>
        <tr>
            <td class="moviePicture">
                <img src="<?= $moviePicture ?>" alt="poster">
            </td>
            <td class="moviePlot">
                 <span><?= $plot ?></span>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <ul>
                    <li onclick="window.open('https://www.themoviedb.org/person/<?= $people[0]->id ?>')" class="peoplePicture"><?= $people[0]->name ?><br>as <?= $people[0]->character ?><br>
                        <img src="https://image.tmdb.org/t/p/w780<?= $people[0]->profile_path ?>"></li>
                    <li onclick="window.open('https://www.themoviedb.org/person/<?= $people[1]->id ?>')" class="peoplePicture"><?= $people[1]->name ?><br>as <?= $people[1]->character ?><br>
                        <img src="https://image.tmdb.org/t/p/w780<?= $people[1]->profile_path ?>"></li>
                    <li onclick="window.open('https://www.themoviedb.org/person/<?= $people[2]->id ?>')" class="peoplePicture"><?= $people[2]->name ?><br>as <?= $people[2]->character ?><br>
                        <img src="https://image.tmdb.org/t/p/w780<?= $people[2]->profile_path ?>"></li>
                    <li onclick="window.open('https://www.themoviedb.org/person/<?= $people[3]->id ?>')" class="peoplePicture"><?= $people[3]->name ?><br>as <?= $people[3]->character ?><br>
                        <img src="https://image.tmdb.org/t/p/w780<?= $people[3]->profile_path ?>"></li>
                </ul>
            </td>
        </tr>
    </table>
        
    </div>
    <div id="right">
       
    </div>
</div>


        </div>
                <footer>
            Mert CELEN 2016
        </footer>
    </div>
</body>

</html>



