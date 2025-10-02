<?php
declare(strict_types=1);
namespace PHPShapes\Shapes;

/**
 * Defines any shape with an integer or floating-point area.
 * @author EthanKletschke <ethankletschke@outlook.com>
 */
interface IShape {
  /**
   * Calculates the area of the shape.
   * @return int|float The area of the shape.
   */
  public function getArea(): int | float;
}
