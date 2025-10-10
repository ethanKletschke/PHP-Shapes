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
   * @since 0.1.0
   */
  private int $length;
  /**
   * The horizontal width of the rectangle.
   * @var int
   * @since 0.1.0
   */
  private int $width;

  /**
   * The size of the interior angles of a rectangle or square.
   * @var int
   * @since 0.4.0
   */
  private const int ANGLE_SIZE = 90;

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
   * @return int The integer area of the rectangle.
   * @since 0.1.0
   */
  public function getArea(): int {
    return $this->length * $this->width;
  }
  
  /**
   * Gets the vertical length of the rectangle.
   * @return int The rectangle's length.
   * @since 0.3.0
   */
  public function getLength(): int {
    return $this->length;
  }

  /**
   * Gets the horizontal width of the rectangle.
   * @return int The rectangle's width.
   * @since 0.3.0
   */
  public function getWidth(): int {
    return $this->width;
  }

  /**
   * Sets a new vertical length for the rectangle.
   * @param int $len The new length.
   * @return void
   * @since 0.3.0
   */
  public function setLength(int $len): void {
    $this->length = $len;
  }

  /**
   * Sets a new horizontal width for the rectangle.
   * @param int $width The new width.
   * @return void
   * @since 0.3.0
   */
  public function setWidth(int $width): void {
    $this->width = $width;
  }
}
