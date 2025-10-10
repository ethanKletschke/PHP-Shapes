# PHP Shapes

A shape library for PHP. Meant as a skills reference only.

- Author: Ethan Kletschke
- Version: `0.4.0`
- Environment(s): Windows 11
- License: MIT (See below)

As of version 0.4.0, this project is licensed under a modified MIT License that prohibits AI training.
Previous versions remain under the standard MIT License

## What is This Project?

This is a shapes class library built solely with PHP. Pretty self-explanatory.

This project is mainly a skills reference for my portfolio, so it's definitely not built
for use in production (I mean, why would you use these basic shapes in a production
environment anyways?). 

There's tons of documentation (and "normal") comments which explain the code pretty well, 
so it'd be redundant to talk about the code and classes here. :)

## Inspiration

This project was (surprisingly) inspired by 
[a _**TypeScript**_ example on W3Schools](https://www.w3schools.com/typescript/typescript_classes.php#:~:text=the%20implements%20keyword.-,Example,-interface%20Shape%20%7B),
which is a site I used to self-teach a lot of my
programming skills.

## Most Recent Change (v0.4.0)

Big update this time! :) 

- Add the `Polygon` class, which defines a shape with any number of sides, 
  defined by its corner points.
- Start adding unit tests.
  - Added `PathTest.php` to test the `Path` class.
  - Added `SquareTest.php` to test the `Square` class.
- Fixed the `Path` class's constructor and `getHighestIndex()` method
  to properly handle being passed an empty array.
- Added distance functions (and private `sqr()` and `square()` methods) to the `Point` class.
