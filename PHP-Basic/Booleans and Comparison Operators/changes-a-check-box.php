<?php
/*
 1.

You’re going to write a function that changes a check box depending on whether the answer given
 was correct or incorrect.

Write a function markAnswer(). Your function should expect two arguments:

    1) The first is a boolean value—if the answer was correct, this value will be TRUE otherwise it
     should be false.
    2) The second argument will be an associative array representing the checkbox. Since this
      function will be making permanent changes to the box, it should be passed by reference to the function.


2.

Now to write the meat of the function!

If the answer was correct, the function should change the value at the box’s key of "shape" to "checkmark"
and the value at the box’s key of "color" to "green". Otherwise, the function should change the value at
the box’s key of "shape" to "x" and the value at the box’s key of "color" to "red".

3.

Time to test your function! We’ve provided two associative arrays for you—each represents a different
learner. Invoke your function twice:

    First invoke markAnswer() passing in the value at "is_correct" for $learner_one as well as their "box".
    Next, invoke markAnswer() passing in the value at "is_correct" for $learner_two as well as their "box".
    Finally, use print_r() to print each learners box and make sure they’ve changed as expected.

 */

$learner_one = ["is_correct"=>FALSE, "box"=>["shape"=>"none", "color"=>"none"]];

$learner_two = ["is_correct"=>TRUE, "box"=>["shape"=>"none", "color"=>"none"]];

function markAnswer($bool, &$arr)
{
    if($bool) {
        $arr["shape"] = "checkmark";
        $arr["color"] = "green";
    } else {
        $arr["shape"] = "x";
        $arr["color"] = "red";
    }
}
markAnswer($learner_one["is_correct"], $learner_one["box"]);
markAnswer($learner_two["is_correct"], $learner_two["box"]);
print_r($learner_one["box"]);
print_r($learner_two["box"]);