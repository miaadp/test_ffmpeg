<?php
//exec('ffmpeg -ss 00:05:10 -i "https://poty-dl.herokuapp.com/409/k.mp4" -vframes 1 -f image2 "image.jpg"');
//exec('ffmpeg -ss 00:15:10 -i "https://poty-dl.herokuapp.com/409/k.mp4" -vframes 1 -f image2 "image2.jpg"');
//exec('ffmpeg -ss 00:25:10 -i "https://poty-dl.herokuapp.com/409/k.mp4" -vframes 1 -f image2 "image3.jpg"');
//exec('ffmpeg -i "https://poty-dl.herokuapp.com/409/k.mp4" -map 0:v -ss 00:00:10 -frames:v 1 frame_1.png -map 0:v -ss 00:05:10 -frames:v 1 frame_2.png',$output);
header("Content-type: application/zip");
exec('ffmpeg -i "https://poty-dl.herokuapp.com/409/k.mp4" -vf fps=1/300 img-%%02d.jpg');
$res = glob("img-*.jpg");
$zip = new ZipArchive();
$zip->open('images.zip', ZipArchive::CREATE | ZipArchive::OVERWRITE);
foreach ($res as $file){
    $zip->addFile($file);
}
$zip->close();
echo readfile('images.zip');
?>
