<?php include('include/header.php'); ?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="css/index.css" />
  <!-- Array of countries with all the values set by the CA instructor. And again for user-friendliness purposes I decided to sort the array alphabetically so it'll be easier for the user to select a country from the drop down list. -->
  <?php $countries = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw");
  ksort($countries) ?>

</head>

<body>

  <div class="container">
    <h2>Select a Country to see its Capital:</h2>
    <div class="row">
      <div class="col-25">
        <label for="country">Country</label>
      </div>
      <div class="col-75">

        <form action="tables.php" method="POST">
          <select id="country" name="search">
          <!-- Here I use another foreach loop to display all the countries inside the array as an option in the drop down list -->
            <?php 

              echo "<option>Select a Country</option>";

              foreach ($countries as $x => $y) {             
                echo"<option> $x </option>";    
              } 
              
              
              ?>
          </select>  
          <div class="row">
        <!-- Adding a submit button so the user can select a country and sumbit the selected option to get the countries' capital output -->
            <input type="submit" value="Submit">
          </div>        
        </form>
      </div>
    </div>    
  </div>

</body>

</html>

<?php include('include/footer.php'); ?>