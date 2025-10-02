<?php
declare(strict_types=1);
namespace PHPShapes\Shapes;

/**
 * Defines a round shape with a radius and a center point.
 * @author EthanKletschke <bbruhingson@gmail.com>
 */
class Circle implements IShape {
  /**
   * The distance between the circle's center and its circumference.
   * @var int
   */
  private int $radius;
  /**
   * The center point of the circle on the Cartesian plane.
   * @var \PHPShapes\Shapes\Point
   */
  private Point $center; 

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
   * 2πr, where π = 3.14159..., and r is the circle's radius.
   * @return float The area of the circle.
   */
  public function getArea(): float {
    return 2 * pi() * $this->radius;
  }

  /**
   * Determines whether the center of the circle is situated on
   * the origin of the Cartesian plane, i.e. (0,0).
   * @return bool <code>true</code> if the center of the circle is on the origin.
   */
  public function centerIsOrigin(): bool {
    return $this->center->isOrigin();
  }
}
