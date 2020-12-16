<?php
$file = $_GET['fname'];
if (isset($file))
{
    include("img/$file");
}
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<title>LFI</title>
</head>
<style>
.bbgrnd {
    background: rgba(0, 0, 39, 1);
}

.nbgrnd {
    background: rgba(255, 122, 0, 1);
}
</style>
<body class="bg-light">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="./index.php">Moon Landing</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Partners</a>
    </li>
  </ul>
</nav>


<div class="jumbotron text-center bbgrnd">
<h1 class="text-white">Coming Soon!<br></h1>
<div id="lfi" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#lfi" data-slide-to="0" class="active"></li>
    <li data-target="#lfi" data-slide-to="1"></li>
    <li data-target="#lfi" data-slide-to="2"></li>
    <li data-target="#lfi" data-slide-to="3"></li>
    <li data-target="#lfi" data-slide-to="4"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/moon.jpg" alt="NASA">
    </div>
    <div class="carousel-item">
      <img src="img/moon1.jpg" alt="Redirection">
    </div>
    <div class="carousel-item">
      <img src="img/moon2.jpg" alt="ummmmm">
    </div>
    <div class="carousel-item">
      <img src="img/moon3.jpg" alt="911">
    </div>
    <div class="carousel-item">
      <img src="img/moon4.jpg" alt="China mooncakes">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#lfi" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#lfi" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<br><h3 class="text-white">More Moon Comics!</h3>
</div>

<div class="container text-center bg-light">
    <div class="row">
        <div class="col-lg-4">
            <img src="moon_landing.php?fname=moonComic.png" class="img-thumbnail rounded-circle" alt="Moon Comics"> 
            <h2>Moon Comics</h2>
            <p class="text-muted">Way back in the Winter of 2007, we went in search for originality.
            Mainstream comics, movies, and anything else with an original story-line were quickly becoming endangered species. 
            Re-boots, re-makes, and regurgitations of existing stories and characters were creating a landslide of 'been-there-done-that' media.</p>
            <button type="button" class="btn btn-dark"><a class="text-white" href="http://www.thevegetablewars.com/">GoTo</a></button>
        </div>
        <div class="col-lg-4">
	<img src="img/moonKnight.png" class="img-thumbnail rounded-circle" alt="Moon Knight">
            <h2>Moon Knight</h2>
            <p class="text-muted">Moon Knight is a fictional superhero appearing in American comic books published by Marvel Comics. Created by writer Doug Moench and artist Don Perlin, the character first appeared in Werewolf by Night #32. Moon Knight was ranked by Wizard magazine as the 149th-greatest comic book character of all time.</p>
            <button type="button" class="btn btn-dark"><a class="text-white" href="https://www.marvel.com/comics/series/20488/moon_knight_2016_-_2018?byZone=marvel_site_zone&offset=0&byType=comic_series&dateStart=&dateEnd=&orderBy=release_date+desc&byId=20488&limit=18&count=20&totalcount=27">GoTo</a></button>
        </div>
        <div class="col-lg-4">
            <img src="img/moonSailor.png" class="img-thumbnail rounded-circle" alt="Moon Comics"> 
            <h3>Sailor Moon</h2>
            <p>Sailor Moon is a Japanese shōjo manga series written and illustrated by Naoko Takeuchi. It was originally serialized in Nakayoshi from 1991 to 1997; the 60 individual chapters were published in 18 tankōbon volumes.</p>
            <button type="button" class="btn btn-dark"><a class="text-white" href="https://kodanshacomics.com/series/sailor-moon/">GoTo</a></button>
        </div>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
  </body>
</html>
