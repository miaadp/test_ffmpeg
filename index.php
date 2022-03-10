<?php
exec("ffmpeg -i https://ez-dl.herokuapp.com/5d9 -preset ultrafast -threads 2  -c:v libx265 -crf 27 -map 0:v -c:a aac -map 0:a -c:s copy -map 0:s? output.mp4");
