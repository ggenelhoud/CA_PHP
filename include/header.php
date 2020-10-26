<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Putting the header and footer inside the include so we dont need to code it again, just need to access the include file to "insert" all the code into the other pages as the header of every page will be the same in this website. -->
  <title>Gabriel Genelhoud</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: red;
  }
  </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Gabriel Genelhoud </br> Website</h1>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">Gabriel Genelhoud</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="countries.php">Countries</a></li>
        <li><a href="tables.php">Tables</a></li>
      </ul>
    </div>
  </div>
</nav>