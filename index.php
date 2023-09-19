<?php 

require_once __DIR__ . '/Film.php';

$rawFilmList = [
    [
        'title' => 'Harry Potter e la pietra filosofale',
        'year'=> '2001',
        'lore'=>'Un ragazzo fortunato trova un pezzo di metanfetamina e inizia un trip di allucinazioni',
        'type'=>'fantasy'
    ],
    [
        'title' => 'La sirenetta',
        'year'=> '2023',
        'lore'=>'Fiaba rivista in chiave moderna in cui la protagonista impersonifica il Mar Nero, poteva andare peggio.. poteva essere il Mar Morto',
        'type'=>'musical'
    ],
    [
        'title' => 'The Avengers',
        'year'=> '2012',
        'lore'=>'Serie di film penosi che obbligano a guardarli tutti sennò non capisci di che parlano, anche le serie connesse..bella cacata. Iron-Man muore.',
        'type'=>'Film di merda'
    ],
    [
        'title' => 'One night in Paris',
        'year'=>'2004',
        'lore'=>'Poteva essere il concerto dei Depeche mode ma preferiamo concentrarci sulle cose che contano, tipo le patonze!',
        'type'=>'Per Adulti'
    ],
    ];

    $FilmList = array_map(function($el){
        $film = new Film ($el['title'] );
        $film->titolo =$el['title'];
        $film->anno =$el['year'];
        $film->trama = $el['lore'];
        $film->genere = $el['type'];
      
        return $film;
    },$rawFilmList );

    ?>
    <html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>

    <link rel="stylesheet" href="./style.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>



    <script src="./main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>