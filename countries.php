<?php include('include/header.php'); ?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="css/cnt.css" />
  <?php $countries = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw"); ksort($countries) ?>
  
</head>

<body>

  <div class="container">
    <h2>Select a Country to see its Capital:</h2>
    <div class="row">
      <div class="col-25">
        <label for="country">Country</label>
      </div>
      <div class="col-75">
        
     
        <select id="country" name="country">
       
          <option><?php echo'Select a Country'?></option>
          <?php foreach ($countries as $x => $y) { ?>

            <option><?php echo $x; ?></option>
            

          <?php } ?>

        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
      </div>
    </div>
    <div class="row">
    

     
      <input type="submit" value="Submit"  >
          </input>

    </div>
    </form>
  </div>

</body>

</html>

<?php include('include/footer.php'); ?>