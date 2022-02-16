<?php
exec('ffmpeg -ss 00:5:10 -i "https://poty-dl.herokuapp.com/409/k.mp4" -vframes 1 -f image2 "img-1.jpg"',$output);
exec('ffmpeg -ss 00:10:10 -i "https://poty-dl.herokuapp.com/409/k.mp4" -vframes 1 -f image2 "img-2.jpg"',$output);
exec('ffmpeg -ss 00:15:10 -i "https://poty-dl.herokuapp.com/409/k.mp4" -vframes 1 -f image2 "img-3.jpg"',$output);
exec('ffmpeg -ss 00:20:10 -i "https://poty-dl.herokuapp.com/409/k.mp4" -vframes 1 -f image2 "img-4.jpg"',$output);
exec('ffmpeg -ss 00:45:10 -i "https://poty-dl.herokuapp.com/409/k.mp4" -vframes 1 -f image2 "img-5.jpg"',$output);

$res = glob("img-*.jpg");
$datas = [];
foreach ($res as $file){
    $datas[] = base64_encode(file_get_contents($file));
}
echo json_encode($datas);
