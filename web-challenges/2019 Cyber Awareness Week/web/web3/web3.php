<?php
$cookie_name = "admin";
$var1 = '<div class="card bg-light text-center">
  <div class="container">
    <button type="button" class="btn btn-white text-info" data-toggle="collapse" data-target="#cookies">#cookies</button>
    <div id="cookies" class="collapse text-info">
      <p class="pl-2 text-info">Cookies are often used to track a users movements through a website. <br><br>Cookies have a set <strong>name</strong> and a <strong>value</strong> with some optional parameters for convenience and security. It is normally assigned to you by the website or server you are connecting too. However, it should not be relied on for authenticating users. <br><br>For more information about <code>Browser Cookies</code> check out this <a href="//www.w3schools.com/php7/php7_cookies.asp">#cookies</a> reference page. <br><br>  Or just go straight to the <a href="//www.php.net/manual/en/features.cookies.php">#docs.</a></p>
    </div>
  </div>
</div>';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
    <title>Web3</title>
<body>
<div class="navbar nav">
  <nav>
    <a class="text-black" href="/taunt.php"> <span class="text-muted">Challenges</span> </a>
  </nav>
</div>
<div class="container text-center mt-5">
  <div class="row">
    <div class="col mt-5">
        <label for="inputPassword5">Got Milk?</label>
        <small id="passwordHelpBlock" class="form-text text-muted">
          Now I need some cookies.
        </small>

      <div class="contianer mt-5 text-center">
        <div class="row">
          <div class="col mt-5 text-center">
            <div class="container">

              <button type="button" class="btn btn-sm btn-primary" data-toggle="collapse" data-target="#milk">Hint</button>
              <div id="milk" class="collapse text-info">
                <br>Browser Cookies come in different names, values, and sizes. <br> Try editing the <i class="bg-info text-white">cookie name</i> on this page to something an admin might use.
              </div>
            </div>
            <span><?php if (isset($_COOKIE[$cookie_name])) {
              echo "<br><br><h1>Great Job!</h1><br><br><span class=\"text-muted\">Did you know that cookies are used to track things like shopping carts? Or if a user of a website has liked an image before? Imagine all the cool things you can do just by editing cookies!<br><span class=\"text-muted\">Editing Cookies sure is useful feature, check out the php <a href=\"https://www.php.net/manual/en/features.cookies.php\">#docs</a> for more info on cookies.</span>";
              echo "<br><i class=\"text-info\">Flag is: </i><code class=\"text-center\">k{c00kie_m0nst3r}</code><br><i class=\"text-info\">Be sure to submit flags to our <code>@KSS Bot</code> <a href=\"//discord.gg/h22KRvU\">discord bot</i></a><br>Next challenge at <code>https://kryptsec.com/challenges/web/web4.php</code>";
            } ?></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
