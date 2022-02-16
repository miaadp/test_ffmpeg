<?php
use thiagoalessio\TesseractOCR\TesseractOCR;
require 'vendor/autoload.php';
echo (new TesseractOCR('photo_2022-02-15_19-47-26.jpg'))->run();
