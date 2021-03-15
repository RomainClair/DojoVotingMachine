# A simple voting machine

## Skills & concepts

* Control structures
* Simple console interaction

## Goals

The goal of this dojo is to create a very simple CLI voting machine.

There is 4 candidates.
The program will ask repeatedly to choose one candidate by typing it's number.

The program will count one vote for the given candidate if the user enters a number between 1 to 4.
It will stop and display the total number of vote for each candidate if the user enters 0.

## Tips

The PHP readline() function is very similar to the JS prompt().

Giving a string argument, it will display the string and wait for the user to type something.
The user input will be returned.

Example :

```php

$input = readline("Enter something : ");

echo "You entered " . $input;

```
