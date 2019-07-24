<?php
    require_once('CalcHelper.php');
    require_once('NumberParser.php');
    
    $cHelper = new CalcHelper();
    $np = new NumberParser($cHelper);
    if (isset($_POST['btn'])) {
        $np->setArabicNumber($_POST['number']);
        $np->parseNumber();
    }

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="bulma.min.css" rel="stylesheet">
    <title>Arabic to Roman Numbers</title>
</head>
<body>
<section class="section">
    <h1>Arabic to Roman Number Parser</h1>
    <form class="control" method="post">
        <div class="columns">
            <div class="column">
                <label for="number" class="label">Input number:</label>
                <input class="input" type="number" name="number" id="number" placeholder="Input arabic number here"/>
            </div>
            <div class="column">
                <label class="label">Roman Number:</label>
                <span class="tag is-success is-medium" id="romanNumber"><?= $np->getRomanNumber() ?></span>
            </div>
            <div class="column">
                <br>
                <button type="submit" name="btn" class="button is-link">Convert</button>
            </div>
        </div>
    </form>
</section>
</body>
</html>
