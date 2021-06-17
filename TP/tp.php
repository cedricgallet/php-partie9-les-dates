<?php
$days=array('lundi','mardi','mercredi','jeudi','vendredi','samedi','dimanche');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Faire un formulaire avec deux listes déroulantes. La première sert à choisir le mois, et le deuxième permet d'avoir l'année.  
    En fonction des choix, afficher un calendrier comme celui-ci :  -->

    

    <form>
        <select name="months">
            <option value="1">janvier</option>
            <option value="2">février</option>
            <option value="3">Mars</option>
            <option value="4">Avril</option>
            <option value="5">Mai</option>
            <option value="6">Juin</option>
            <option value="7">Juillet</option>
            <option value="8">Août</option>
            <option value="9">Septembre</option>
            <option value="10">Octobre</option>
            <option value="11">Novembre</option>
            <option value="12">Décembre</option>
        </select>


        <select name="year">

            <?php for($years=($currentYear-$interval) ; $years<=($currentYear+$interval) ; $years++){?>

            <option value="<?=$years?>" <?php echo ($year==$years) ? 'selected' : '';?>><?=$years?></option>

            <?php } ?>

        <button type="submit">Envoyer !</button>
    </form>
</body>

</html>