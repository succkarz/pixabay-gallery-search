<!DOCTYPE html>
<html>

<head>
  <title>GALLERY</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/custom.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top mb-2">
    <a class="navbar-brand" href="index.php">Gallery</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" name="q" type="search" placeholder="<?php if(isset($_POST['q'])){echo $_POST['q'];}else{echo 'Search';} ?>" aria-label="Search">
        <button class="btn btn-outline-primary my-2 my-sm-0" name="b" type="submit">Search</button>
      </form>
    </div>
  </nav>