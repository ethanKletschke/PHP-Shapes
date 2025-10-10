<?php
declare(strict_types=1);
namespace PHPShapes\Shapes;

/**
 * Defines any shape with an integer or floating-point area.
 * @author EthanKletschke <ethankletschke@outlook.com>
 * @since 0.1.0
 */
interface IShape {
  /**
   * Calculates the area of the shape.
   * @return int|float The area of the shape.
   * @since 0.1.0
   */
  public function getArea(): int | float;
}
