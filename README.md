# PHP Shapes

A shape library for PHP. Meant as a skills reference only.

- Author: Ethan Kletschke
- Version: `0.6.0`
- Environment(s): Windows 11
- Project metadata file: [project.yaml](./meta/project.yaml)
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

## Most Recent Changes (v0.6.0)

- Added a `RectangleTest` class under the `tests` folder.
- Tweaked the methods called in the `SquareTest` class's tests 
  to use keyword arguments in order to make the code a bit more readable.
- Add better handling of negative values in the `Rectangle` constructor.
