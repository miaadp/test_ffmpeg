<?php
// exec("ffmpeg -i https://ez-dl.herokuapp.com/5d9 -preset ultrafast -c:v libx265 -crf 27 -map 0:v -c:a aac -map 0:a -c:s copy -map 0:s? output.mp4 -y");
exec("ffmpeg -i https://ez-dl.herokuapp.com/5d9 -threads 2 -preset veryfast -vcodec libx264 -crf 27 -b:v 400k -bufsize 400k -s 640x360 output.mp4");
// exec("ffmpeg -i https://ez-dl.herokuapp.com/5d9 -threads 2 -vcodec libx264 -crf 27 -preset veryfast -b:v 400k -bufsize 400k -s 640x360 output.mp4");
