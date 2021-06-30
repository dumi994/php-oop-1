<?php 

   include __DIR__ . '/partials/class.php';
   include __DIR__ . '/db/database.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>PHP OOP</title>
</head>
<body>
    <header>
        <h1>PHP OOP</h1>
    </header>
    <main class="movies">
        <?php foreach ($movies as $movie):
        ?>        
            <div class="movie">
            <img src="<?php echo $movie->img?>" alt="">
                <h2>
                    <?php echo $movie->title;?>
                </h2>
                <p>
                    <?php echo $movie->subtitle;?>
                </p>
                <span>
                    <?php echo $movie->anno;?>  
                </span>
            </div>
        <?php    
        endforeach;
        
        ?>    
    </main>
    
</body>
</html>