<?php

$utf8 = "السلام علیکم ورحمة الله وبرکاته!"; //32 characters
echo strlen($utf8); // will show 59 characters

// For  UTF8 better use mb_strlen()

echo "\n";
echo mb_strlen($utf8);