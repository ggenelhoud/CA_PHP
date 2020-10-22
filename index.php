<?php include('include/header.php'); ?>

<link rel="stylesheet" type="text/css" href="css/indx.css" />

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h2>About Me</h2>

      <img src="include\me.jpg" width="343" height="300">

      <p>My name is Gabriel Genelhoud, I'm a Brazilian full-time student at CCT College Dublin.
        I have been living in Dublin for the past 2.5 years.
      </p>
      <h3>Professional Profile Links:</h3>

      <ul class="nav nav-pills nav-stacked">
        <li class="links">
          <div class="logos"></div><a href="https://www.linkedin.com/in/gabriel-genelhoud/" target="blank"> <img src="https://bit.ly/31ljSUD" width="50" height="40"> GabrielGenelhoud/Profile</a>
        </li>
        <li><a href="https://github.com/ggenelhoud" target="blank"><img src="https://bit.ly/31rcbwe" width="70" height="20"> GabrielGenelhoud/Profile</a></li>

      </ul>
      <hr class="hidden-sm hidden-md hidden-lg">
    </div>

    <?php $myid = array("Gabriel Genelhoud" => "2019386") ?>

    <table border="1" cellspacing="3">
      <th>Student Name</th>
      <th>Student Number</th>
      <?php foreach ($myid as $x => $y) : ?>
        <tr>
          <td><?php echo ($x); ?></td>
          <td><?php echo ($y); ?></td>
        </tr>
      <?php endforeach; ?>
    </table>


    <div class="col-sm-8">

      <h1>Continuos Assesment About</h1>
      <p1>We are required to make a website with three pages using the server-side scripting language PHP.The major requirements for this assignment are outlined below:</p1>

      <p2>
        <ul></br>
          <li>Create a home page that includes your personal information e.g. student name, number, course, and CA title. For your home page and other pages, create a header, footer and main part.
        </ul>
      </p2>

      <p3>
        <ul>
          <li>PHP include files: identify and separate the common / similar parts (e.g. headers, footers, navigation menus) of your code from the rest of the code and use the include and require files. Including files is very useful when you want to include the same PHP, HTML, or text on multiple pages of a website i.e. it will speed up the development, reduce the amount of code, and achieve a higher level of flexibility and overall consistency across the pages in our website.
        </ul>
      </p3>

      <p4>
        <ul>
          <li>PHP arrays: In your site, create a page to display the data from an array into a HTML table with some styling (e.g. Bootstrap).
        </ul>
        </p3>

        <p5>
          <ul>
            <li>PHP forms: Create a separate page that will have a form that will allow the user to enter in a country name (can be done from a drop down list) and will return the correct capital. If the country is not in the list, display a message to the user to inform them that this country is not listed (or could not be found).
          </ul>
      </p4>


      <?php include('include/footer.php'); ?>
      </body>

      </html>