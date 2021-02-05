<?php
print strtolower('Chaka LAKAKA ZaVaLaKa');
print strtoupper("\nChaka LAKAKA ZaVaLaKa");
//The ucwords() function uppercases the first letter of each word in a string
print ucwords(strtolower("\nERIC HUMSTER"));

$str = "The Fresh Fish with Rice Noodle was delicious, but I didn't like the Beef Tripe.";
print "\n" . substr($str, 0, 30) . "...";

$card = "4000-1234-5678-9101";
print "\n" . "Card last four number is " . substr($card, -4, 4);

$str2 = "Hello, {username}! How are you?";
$str3 = "Eduard";
print "\n" . str_replace("{username}", $str3, $str2);