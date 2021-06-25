<?php 

    class Movie
    {
        public $title;
        public $subtitle;
        public $yor;

        public function __construct($title, $subtitle, $yor)
        {
            $this->title = $title;
            $this->subtitle = $subtitle;
            $this->yor = $yor;
            /* ci va il return? */
        }
        
        
    }
    $movies=[
        new Movie('Pirati dei caraibi', 'La maledizione della prima luna', 'https://images-na.ssl-images-amazon.com/images/I/61E38KYZrVL.jpg'),
        new Movie('Pirati dei caraibi', 'La maledizione del forziere fantasma', 'https://www.dvd.it/176835-thickbox_default/pirati-dei-caraibi-la-maledizione-del-forziere-fantasma.jpg'),
        new Movie('Pirati dei caraibi', 'Ai confini del mondo', 'https://images-na.ssl-images-amazon.com/images/I/61N8Xg3vYlL._SY445_.jpg'),
        new Movie('Pirati dei caraibi', 'Oltre i confini del mare', 'https://cdn.bestmovie.it/wp-content/uploads/2011/04/Pirati-dei-Caraibi-4-Locandina-691x1024.jpg'),
        new Movie('Pirati dei caraibi', 'La vendetta di Salazar', 'http://aforismi.meglio.it/img/film/La_vendetta_di_Salazar.jpg'),
    ];



  /*   var_dump($movies[0]); */
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
        <?php foreach ($movies as $movie):
        ?>        
            <div class="movie">
            <img src="<?php echo $movie->yor?>" alt="">
                <h1>
                    <?php echo $movie->title;?>
                </h1>
                <p>
                    <?php echo $movie->subtitle;?>
                </p>
                <span>
                    <?php echo $movie->yora;?>  
                </span>
            </div>
        <?php    
        endforeach;
        
        ?>    
    </main>
    
</body>
</html>