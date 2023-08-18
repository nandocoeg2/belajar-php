<?php


// function

$name = "Nando";

function sayHello()
{
    $name = "Budi";
    echo "Hello $name" . PHP_EOL;
    global $name;
    echo "Hello $name" . PHP_EOL;
}

sayHello();

// function with argument

function sayHelloTo($name)
{
    echo "Hello $name, it's function with argument!" . PHP_EOL;
}

sayHelloTo("Nando");

// function with return value

function sum(int $first, int $last)
{
    $total = $first + $last;
    return $total;
}

echo sum(100, 100);

// variable function

$var = "sayHello";
$var("Nando");

// anonymous function

$anon = function (string $name) {
    echo "Hello $name, it's anonymous function!" . PHP_EOL;
};

$anon("Nando");

// arrow function

$arrow = fn (string $name) => "Hello $name, it's arrow function!" . PHP_EOL;

echo $arrow("Nando");

// recursive function

function factorialRecursive(int $value): int
{
    if ($value == 1) {
        return 1;
    } else {
        return $value * factorialRecursive($value - 1);
    }
}

echo factorialRecursive(5) . PHP_EOL;