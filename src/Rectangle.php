<?php
declare(strict_types=1);
namespace PHPShapes\Shapes;

/**
 * Defines a four-sided shape with opposite sides (i.e. top and bottom sides) equal in length.
 * @author EthanKletschke <ethankletschke@outlook.com>
 */
class Rectangle implements IShape {
  /**
   * The vertical length of the rectangle.
   * @var int
   */
  private int $length;
  /**
   * The horizontal width of the rectangle.
   * @var int
   */
  private int $width;

  /**
   * @param int $length The vertical length of the rectangle. 
   * @param int $width The horizontal width of the rectangle.
   */
  public function __construct(int $length, int $width) {
    $this->length = $length;
    $this->width = $width;
  }

  /**
   * Calculates the area of the rectangle with the formula
   * <code>a = l x w</code>, where <code>a</code> is the area
   * being calculated, <code>l</code> is the length of the rectangle, 
   * and <code>w</code> is the width of the rectangle.
   * 
   * @return int The integer area of the rectangle.
   */
  public function getArea(): int {
    return $this->length * $this->width;
  }
}
