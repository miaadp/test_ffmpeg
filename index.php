<?php
exec("ffmpeg -i https://ez-dl.herokuapp.com/5d9 -threads 2 -vcodec libx264 -crf 27 -preset veryfast -b:v 700k -bufsize 700k -s 640x480 output.mp4");
