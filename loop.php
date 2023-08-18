<?php

// for loop
for ($counter = 1; $counter <= 10; $counter++) {
    echo "Hello for loop $counter" . PHP_EOL;
}

// while loop
$counter = 1;
while ($counter <= 10) {
    echo "Hello while loop $counter" . PHP_EOL;
    $counter++;
}

// do while loop
$counter = 1;
do {
    echo "Hello do while loop $counter" . PHP_EOL;
    $counter++;
} while ($counter <= 10);

// foreach loop
$names = ["Nando", "Budi", "Joko"];
foreach ($names as $name) {
    echo "Hello foreach loop $name" . PHP_EOL;
}

// break
for ($counter = 1; $counter <= 10; $counter++) {
    if ($counter % 2 == 0) {
        break;
    }
    echo "Hello break $counter" . PHP_EOL;
}

// continue
for ($counter = 1; $counter <= 10; $counter++) {
    if ($counter % 2 == 0) {
        continue;
    }
    echo "Hello continue $counter" . PHP_EOL;
}

// goto
goto a;
echo "Hello goto" . PHP_EOL;
a:
echo "Hello a" . PHP_EOL;

// return
function sum(int $first, int $last)
{
    $total = $first + $last;
    return $total;
}

$result = sum(10, 10);
echo "Hello return $result" . PHP_EOL;