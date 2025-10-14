<?php
declare(strict_types=1);
namespace PHPShapes\Shapes;

/**
 * Defines a round shape with a radius and a center point.
 * @author EthanKletschke <bbruhingson@gmail.com>
 * @since 0.1.0
 */
class Circle implements IShape {
  /**
   * The distance between the circle's center and its circumference.
   * @var int
   * @since 0.1.0
   */
  private int $radius;
  /**
   * The center point of the circle on the Cartesian plane.
   * @var \PHPShapes\Shapes\Point
   * @since 0.1.0
   */
  private Point $center; 

  /**
   * The circumference of the circle, calculated as "π x d", where d is the
   * diameter of the circle.
   * @var float
   * @since 0.3.0
   */
  public float $circumference {
    get => pi() * $this->diameter;
  }

  /**
   * The diameter (2 x radius) of the circle.
   * @var int
   * @since 0.3.0
   */
  public int $diameter {
    get => $this->radius * 2;
  }

  /**
   * @param int $r The radius of the circle.
   * @param int $centerX The X-coordinate of the center point.
   * @param int $centerY The y-coordinate of the center point.
   */
  public function __construct(int $r, int $centerX, int $centerY) {
    $this->radius = $r;
    $this->center = new Point(x: $centerX, y: $centerY);
  }

  /**
   * Calculates the internal area of the circle with the formula
   * πr^2, where π = 3.14159..., and r is the circle's radius.
   * @return float The area of the circle.
   * @since 0.1.0
   */
  public function getArea(): float {
    return pi() * $this->radius * $this->radius;
  }

  /**
   * Gets the center point of the circle.
   * @return Point The center point.
   * @since 0.5.0
   */
  public function getCenterPoint(): Point {
    return $this->center;
  }

  /**
   * Gets the radius of the circle.
   * @return int The circle radius.
   */
  public function getRadius(): int {
    return $this->radius;
  }

  /**
   * Determines whether the center of the circle is situated on
   * the origin of the Cartesian plane, i.e. (0,0).
   * @return bool <code>true</code> if the center of the circle is on the origin.
   * @since 0.1.0
   */
  public function centerIsOrigin(): bool {
    return $this->center->isOrigin();
  }

  /**
   * Determines whether the center of the circle passed to the method
   * is on the origin of the Cartesian plane, i.e. (0,0).
   * @param \PHPShapes\Shapes\Circle $c The circle to test.
   * @return bool <code>true</code> if the center of $c is on the origin.
   * @since 0.3.0
   */
  public static function circleCenterOrigin(Circle $c): bool {
    return $c->center->isOrigin();
  }

  /**
   * Creates a new Circle object from a "circle string".
   * @param string $circleStr A circle string in the format "<r,(x,y)>", where "r" is the
   * circle radius, "x" is the center's X-coordinate, and "y" is the center's Y-coordinate.
   * @return Circle|null A new Circle instance, or null.
   * @since 0.5.0
   */
  public static function createFromCircleString(string $circleStr): Circle|null {
    // If the string doesn't match the regex <r,(x,y)>
    if (!preg_match('/^<(\d+),\((\d+),(\d+)\)>$/m', $circleStr, $matches)) {
      return null;
    }

    // Declare the variables to store the 
    $radius = $cx = $cy = 0;

    // Get the matched capture groups in brackets.
    $radius = (int) $matches[1];
    $cx = (int) $matches[2];
    $cy = (int) $matches[3];

    return new Circle($radius, $cx, $cy);
  }
}
