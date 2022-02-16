<?php
//exec('ffmpeg -i "https://poty-dl.herokuapp.com/409/k.mp4" -ss 00:00:10 -vframes 1 -f image2 "image.jpg"',$output);
exec('ffmpeg -i "https://poty-dl.herokuapp.com/409/k.mp4" -map 0:v -ss 00:00:10 -frames:v 1 frame_1.png -map 0:v -ss 00:05:10 -frames:v 1 frame_2.png',$output);
$result = [base64_encode(file_get_contents('frame_1.png')),base64_encode(file_get_contents('frame_2.png'))];
echo json_encode($result);
?>
