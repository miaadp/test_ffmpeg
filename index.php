<?php
use thiagoalessio\TesseractOCR\TesseractOCR;
echo (new TesseractOCR('http://ez-dl.ir/p.jpg'))->run();
