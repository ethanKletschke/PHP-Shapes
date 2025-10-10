<?php
declare(strict_types=1);
namespace PHPShapes\Shapes;

/**
 * Defines a shape with any number of sides, defined
 * with an array of corner points.
 * @author EthanKletschke <ethankletschke@outlook.com>
 * @since 0.4.0
 */
class Polygon {
  /**
   * The corner points of the polygon.
   * @var \PHPShapes\Shapes\Point[]
   */
  private array $corners;
  
  /**
   * @param int[][] $points
   */
  public function __construct(array $points) {
    if (count($points) === 0) {
      $this->corners[] = null;
    } else {
      foreach ($points as [$x, $y]) {
        $this->corners[] = new Point($x, $y);
      }
    }
  }
}
