<?php
use thiagoalessio\TesseractOCR\TesseractOCR;
require 'vendor/autoload.php';
echo (new TesseractOCR('http://ez-dl.ir/p.jpg'))->run();
