<?php


// Looping For

// for ($counter = 1; $counter <= 10; $counter++) {
//     echo "Hello World $counter\n";
// }   
// for ($counter = 10; $counter >= 1; $counter--) {
//     echo "Hello World $counter\n";
// }   


$testFunction = true;

if ($testFunction) {
    function test() {
        echo "Hello World\n";
    }
} else {
    function test() {
        echo "Hello False\n";
    }
}

test();

