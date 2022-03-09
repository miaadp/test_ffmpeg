<?php
exec("ffmpeg -i https://ez-dl.herokuapp.com/5d9 -b:v 700k -bufsize 700k output.mp4");
