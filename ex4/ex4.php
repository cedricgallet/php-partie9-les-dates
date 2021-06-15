<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    setlocale(LC_TIME, 'fr_FR');
    echo mktime() . '<br>';
    echo mktime(15,00, 8, 2, 2016); 
?>
</body>
</html>