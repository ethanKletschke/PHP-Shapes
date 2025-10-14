`# PHP Shapes

A shape library for PHP. Meant as a skills reference only.

- Author: Ethan Kletschke
- Version: `0.5.0`
- Environment(s): Windows 11
- License: MIT (See below)

As of version 0.4.0, this project is licensed under a modified MIT License that prohibits AI training.
Previous versions remain under the standard MIT License.

## What is This Project?

This is a shapes class library built solely with PHP. Pretty self-explanatory.

This project is mainly a skills reference for my portfolio, so it's definitely not built
for use in production (I mean, why would you use these basic shapes in a production
environment anyways?). 

There's tons of documentation (and "normal") comments which explain the code pretty well, 
so it'd be redundant to talk about the code and classes here. :)  
I say this because this is meant solely as a skills reference for my portfolio.
The code is not meant to be run in an app or any form of production environment.

## Inspiration

This project was (surprisingly) inspired by 
[a _**TypeScript**_ example on W3Schools](https://www.w3schools.com/typescript/typescript_classes.php#:~:text=the%20implements%20keyword.-,Example,-interface%20Shape%20%7B),
which is a site I used to self-teach a lot of my current
programming skills.

## Most Recent Changes (v0.5.0)

Yay! Big update!

- Tweaked documentation comments across most files.
- Tweaked and added more to unit testing.
  - Usec `require_once` instead of `require` to "import" the classes into the test
    files.
  - Added `CircleTest.php` to test the `Circle` class.
  - Added to `SquareTest.php`.
    - Add a function to test the `sides` property's `get` hook.
  - Tweaked `PathTest.php` to reflect changes in the `Path` class.
- Tweaked `Path.php`.
  - The `$points` array is now initialised as an empty array by default.
  - The constructor now only initialises the `$points` array
    if the array passed to the constructor is not empty.
  - Tweaked `setPointAt()` 
    - The method now properly handles a `null` value in `$points`.
- Tweaked `Circle.php` and added a method to create a `Circle` instance via a "circle string".
  - `createFromCircleString()` is a static method.
- Start working on `Polygon` class.
- Fixed all property hooks to be public and actually function outside the class.
