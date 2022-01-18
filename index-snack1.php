<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack 1</title>
</head>

<body>
    <!-- Creiamo un array 'matches' contenente altri array i quali rappresentano
       delle partite di basket di un’ipotetica tappa del calendario. 
       Ogni array della partita avrà una squadra di casa e una squadra ospite, 
       punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
       Stampiamo a schermo tutte le partite con questo schema: Olimpia Milano - Cantù | 55 - 60 -->

    <?php
    $matches = [
        [
            'squadraCasa' => 'Trieste',
            'squadraTrasferta' => 'Reggiana',
            'puntiCasa' => 83,
            'puntiTrasferta' => 85
        ],
        [
            'squadraCasa' => 'Brescia',
            'squadraTrasferta' => 'Brescia',
            'puntiCasa' => 88,
            'puntiTrasferta' => 67
        ],
        [
            'squadraCasa' => 'Basket Napoli',
            'squadraTrasferta' => 'Fortitudo Bologna',
            'puntiCasa' => 86,
            'puntiTrasferta' => 89
        ],
        [
            'squadraCasa' => 'Pesaro',
            'squadraTrasferta' => 'Olimpia Milano',
            'puntiCasa' => 85,
            'puntiTrasferta' => 82
        ],
        [
            'squadraCasa' => 'Sassari',
            'squadraTrasferta' => 'Trento',
            'puntiCasa' => 88,
            'puntiTrasferta' => 80
        ],
        [
            'squadraCasa' => 'Varese',
            'squadraTrasferta' => 'Venezia',
            'puntiCasa' => 76,
            'puntiTrasferta' => 68
        ],
        [
            'squadraCasa' => 'Virtus Bologna',
            'squadraTrasferta' => 'Treviso',
            'puntiCasa' => 84,
            'puntiTrasferta' => 66
        ],
        [
            'squadraCasa' => 'Tortona',
            'squadraTrasferta' => 'Cremona',
            'puntiCasa' => 97,
            'puntiTrasferta' => 92
        ],
    ]
    ?>
    <h3>Risultati di giornata</h3>
    <ul>
        <?php for ($i = 0; $i < count($matches); $i++) { ?>
            <?php $match = $matches[$i]; ?>
            <li><?php echo $match['squadraCasa'] . ' - ' . $match['squadraTrasferta'] . ' | ' . $match['puntiCasa'] . ' - ' . $match['puntiTrasferta']; ?></li>
        <?php } ?>
    </ul>
</body>

</html>