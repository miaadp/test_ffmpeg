<?php
exec('ffmpeg -i "https://poty-dl.herokuapp.com/408/k.mp4" -ss 00:00:10 -vframes 1 -f image2 "image%03d.jpg"',$output);
var_dump($output);
?>
