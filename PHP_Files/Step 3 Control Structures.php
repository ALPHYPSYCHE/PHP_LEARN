<?php
// This script checks the temperature and outputs a message accordingly.

$temperature = 20;

// If statement
if ($temperature > 30) {
    echo "It's hot outside!";
} elseif ($temperature > 15) {
    echo "It's a pleasant day.";
} else {
    echo "It's a bit chilly.";
}
?>
