<?php
exec('ffmpeg -ss 00:7:10 -i "https://poty-dl.herokuapp.com/409/k.mp4" -vframes 1 -f image2 "img-1.jpg"',$output);
exec('ffmpeg -ss 00:14:10 -i "https://poty-dl.herokuapp.com/409/k.mp4" -vframes 1 -f image2 "img-2.jpg"',$output);
exec('ffmpeg -ss 00:21:10 -i "https://poty-dl.herokuapp.com/409/k.mp4" -vframes 1 -f image2 "img-3.jpg"',$output);
exec('ffmpeg -ss 00:28:10 -i "https://poty-dl.herokuapp.com/409/k.mp4" -vframes 1 -f image2 "img-4.jpg"',$output);
exec('ffmpeg -ss 00:35:10 -i "https://poty-dl.herokuapp.com/409/k.mp4" -vframes 1 -f image2 "img-5.jpg"',$output);
exec('ffmpeg -ss 00:42:10 -i "https://poty-dl.herokuapp.com/409/k.mp4" -vframes 1 -f image2 "img-6.jpg"',$output);
exec('ffmpeg -ss 00:49:10 -i "https://poty-dl.herokuapp.com/409/k.mp4" -vframes 1 -f image2 "img-7.jpg"',$output);

$res = glob("img-*.jpg");
$datas = [];
foreach ($res as $file){
    $datas[] = base64_encode(file_get_contents($file));
    unlink($file);
}
echo json_encode($datas);
