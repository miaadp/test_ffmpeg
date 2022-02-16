<?php
exec('ffmpeg -ss 00:02:10 -i "https://poty-dl.herokuapp.com/409/k.mp4" -vframes 1 -f image2 "image.jpg"',$output);
//exec('ffmpeg -i "https://poty-dl.herokuapp.com/409/k.mp4" -map 0:v -ss 00:00:10 -frames:v 1 frame_1.png -map 0:v -ss 00:05:10 -frames:v 1 frame_2.png',$output);
header("Content-type: image/jpeg");
echo file_get_contents("image.jpg");
?>
