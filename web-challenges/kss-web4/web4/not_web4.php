<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Web Challenge 4</title>
</head>
<body>
    <div class="navbar nav">
    <nav>
        <a class="text-black" href="/challenges"> <span class="text-muted">Challenges</span> </a>
    </nav>
    </div>
    <div class="container text-center mt-5">
    <div class="row">
        <div class="col mt-5">
            <div class="jumbotron bg-white">
            Woah? how did I get here?
            <!-- status code <302> -->
	    <!-- You've been redirected from /web4.php -->
        <div class="contianer mt-5 text-center">
            <div class="row">
            <div class="col mt-5 text-center">
                <div class="container">

                <button type="button" class="btn btn-sm btn-primary" data-toggle="collapse" data-target="#milk">Hint</button>
                <div id="milk" class="collapse text-info">
		    <br>The source code comment give us a status response code 302. The 3xx status codes mean the file has been moved, and is now redirecting you to another page.
		    <b><br>What if we wanted to still view the original page we requested, and not the actual redirection page?<br><br>
		    We can with <code>cURL</code> which comes native on most operating systems, open up your <code class="text-dark">terminal</code> or <code class="text-dark">cmd</code> and try it out!
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
