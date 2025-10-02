<?php
declare(strict_types=1);
namespace Shapes;

/**
 * Defines a round shape with a radius and a center point.
 * @author EthanKletschke <bbruhingson@gmail.com>
 */
class Circle implements IShape {
  /**
   * The radius of the circle.
   * @var int
   */
  private int $radius;
  /**
   * The center point of the circle.
   * @var \Shapes\Point
   */
  private Point $center; 


  public function __construct(int $r, int $centerX, int $centerY) {
    $this->radius = $r;
    $this->center = new Point(x: $centerX, y: $centerY);
  }

  public function getArea(): float {
    return 2 * pi() * $this->radius;
  }
}
