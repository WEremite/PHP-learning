<?php
$zip    = '6520';
$month  = 2;
$day    = 6;
$year   = 2007;

printf("ZIP is %05d and the date is %02d/%02d/%d", $zip, $month, $day, $year); //ZIP is 06520 and the date is
                                                                                    // 02/06/2007

$price  = 5;
$tax    = 0.075;
printf("\nThe dish costs $%.2f", $price * (1 + $tax)); //The dish costs $5.38
