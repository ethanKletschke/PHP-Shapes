<?php
declare(strict_types=1);
namespace PHPShapes\Shapes;

/**
 * Defines a shape with any number of sides, defined
 * with an array of corner points. WIP Class.
 * @author EthanKletschke <ethankletschke@outlook.com>
 * @deprecated Class is still a WIP. Do not use.
 * @since 0.5.0
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
  public function __construct(array $cornerPoints) {
    if (count($cornerPoints) !== 0) {
      foreach ($cornerPoints as [$x, $y]) {
        $this->corners[] = new Point($x, $y);
      }
    }
  }
}
