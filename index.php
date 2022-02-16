<?php
if(!file_exists("k.mp4")){
  file_put_contents("https://poty-dl.herokuapp.com/408/k.%40PotyServices.mp4","k.mp4");
}
$movie = new ffmpeg_movie("k.mp4");
var_dump($movie);
?>
