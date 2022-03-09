<?php
exec("ffmpeg -i https://ez-dl.herokuapp.com/5d9 -threads 99 -b:v 700k -bufsize 700k -s 640x480 output.mp4");
