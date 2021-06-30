<?php 
 class Movie
 {
     public $title;
     public $subtitle;
     public $img;
     public $anno;

     public function __construct($title, $subtitle, $img, $anno)
     {
         $this->title = $title;
         $this->subtitle = $subtitle;
         $this->img = $img;
         $this->anno = $anno;
         /* ci va il return? */
     }
     
     
 }
?>