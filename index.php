<?php
exec('ffmpeg -i "https://poty-dl.herokuapp.com/408/k.mp4" -ss 00:00:10 -vframes 1 -f image2 "image.jpg"',$output);
echo file_get_contents('image.jpg');
?>
