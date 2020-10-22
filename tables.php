<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="css/tbls.css" />
    <?php include('include/header.php') ?>
    <?php $countries = ["Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw"]; ksort($countries) ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

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