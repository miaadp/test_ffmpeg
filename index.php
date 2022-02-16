<?php
exec('ffmpeg -ss 00:5:10 -i "https://poty-dl.herokuapp.com/409/k.mp4" -vframes 1 -f image2 "img-1.jpg"',$output);
exec('ffmpeg -ss 00:10:10 -i "https://poty-dl.herokuapp.com/409/k.mp4" -vframes 1 -f image2 "img-2.jpg"',$output);
exec('ffmpeg -ss 00:15:10 -i "https://poty-dl.herokuapp.com/409/k.mp4" -vframes 1 -f image2 "img-3.jpg"',$output);
exec('ffmpeg -ss 00:20:10 -i "https://poty-dl.herokuapp.com/409/k.mp4" -vframes 1 -f image2 "img-4.jpg"',$output);
exec('ffmpeg -ss 00:25:10 -i "https://poty-dl.herokuapp.com/409/k.mp4" -vframes 1 -f image2 "img-5.jpg"',$output);
header("Content-type: application/zip");
$res = glob("img-*.jpg");
$zip = new ZipArchive();
$zip->open('images.zip', ZipArchive::CREATE | ZipArchive::OVERWRITE);
foreach ($res as $file){
    $zip->addFile($file);
    unlink($file);
}
$zip->close();
echo readfile('images.zip');
