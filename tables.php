<!DOCTYPE html>
<html lang="en">
<!-- In this page is where the table asked in the assignment is being created and where the array is looped through -->
<head>
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <?php include('include/header.php') ?>

    <!-- Array with all the values set by the CA instructor. And for user-friendliness purposes I used a very short piece of code to sort the array alphabetically. -->
    <?php $countries = ["Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw"]; ksort($countries) ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <!-- Using a foreach loop to loop through the array and automatically create number of rows and collumns according to the array size and needs, and then adding some style -->
    <table border="1" cellspacing="5">
        <th>Country</th>
        <th>Capital</th>
        <?php foreach ($countries as $x => $y) : ?>
            <tr>
                <td><?php echo ($x); ?></td>
                <td><?php echo ($y); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <?php include('include/footer.php'); ?>

</body>

</html>