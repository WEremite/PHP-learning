<?php

//Formatting a price with printf()
$price  = 5;
$tax    = 0.075;
printf("The dish costs $%.2f", $price * (1 + $tax));
//The dish costs $5.38


//Zero-padding with printf()
$zip    = '6520';
$month  = 2;
$day    = 6;
$year   = 2007;
printf("\nZIP is %05d and the date is %02d/%02d/%d", $zip, $month, $day, $year);
//ZIP is 06520 and the date is 02/06/2007

//Displaying signs with printf()
$min    = -40;
$max    = 40;
printf("\nThe computer can operate between %+d and %+d degrees Celcius.", $min, $max);
//The computer can operate between -40 and +40 degrees Celsius.

