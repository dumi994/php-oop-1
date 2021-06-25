<?php 
    class Movie {
        public $title;
        public $subtitle;
        public $yor;
        function __construct($title, $subtitle, $yor){
            $this->title = $title;
            $this->subtitle = $subtitle;
            $this->yor = $yor;
            /* ci va il return? */
        }
    }
    $PiratiDeiCaraibi1 = new Movie('Pirati dei caraibi', 'La maledizione della prima luna', 2003);
    $PiratiDeiCaraibi2 = new Movie('Pirati dei caraibi', 'La maledizione del forziere fantasma', 2006);
    $PiratiDeiCaraibi3 = new Movie('Pirati dei caraibi', 'Ai confini del mondo', 2007);
    $PiratiDeiCaraibi4 = new Movie('Pirati dei caraibi', 'Oltre i confini del mare', 2011);
    $PiratiDeiCaraibi5 = new Movie('Pirati dei caraibi', 'La vendetta di Salazar', 2017);


    var_dump($PiratiDeiCaraibi1, $PiratiDeiCaraibi2, $PiratiDeiCaraibi3, $PiratiDeiCaraibi4, $PiratiDeiCaraibi5);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
</head>
<body>

    <main class="movies">
        <?php foreach ($movie as $movies);
            ?>
            <div class="movie">
                <h1><?php $movie->title;?></h1>
            </div>
            <?php
        
        
        ?>
    </main>
    
</body>
</html>