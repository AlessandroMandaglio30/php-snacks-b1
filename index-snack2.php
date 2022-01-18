<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack 2</title>
</head>

<body>
    <!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non
     conosciamo nella documentazione) che:
     1. name sia più lungo di 3 caratteri,
     2. mail contenga un punto e una chiocciola
     3. age sia un numero.
     Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

    <div>
        <?php
        if (empty($_GET["name"]) || empty($_GET['mail']) || empty($_GET['age'])) {
            echo "Attento! controlla i parametri in GET che stai passando!";
            die;
        }

        $name = $_GET["name"];
        $mail = $_GET["mail"];
        $age = $_GET["age"];

        if (strlen($name) < 4) {
            echo "Accesso negato! la lunghezza non può essere inferiore a 4 caratteri";
        } elseif (strpos($mail, '.') == false || strpos($mail, '@') == false) {
            echo "Accesso negato! e-mail inserita male";
        } elseif (!is_numeric($age)) {
            echo "Accesso negato! l'eta non può essere una lettera";
        } else {
            echo "Accesso riuscito";
        }
        ?>
</body>

</html>