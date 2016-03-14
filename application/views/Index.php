<html>

<?php
/**
 * Created by PhpStorm.
 * User: brittnicarter
 * Date: 3/4/16
 * Time: 7:42 PM
 */
$friends = array("brittni", "brandon", "erika", "zenaida");

// Sort the list
sort($friends);
print join (", ", $friends);
// Randomly select a winner!
$winner = count($friends,rand(0, 3));
print ($winner);
// Print the winner's name in ALL CAPS



?>


</html>