<?php
declare(strict_types=1);
namespace PHPShapes\Shapes;

/**
 * Defines a four-sided shape with all four sides equal in length.
 * @author EthanKletschke <ethankletschke@outlook.com>
 * @extends \PHPShapes\Shapes\Rectangle
 * @since 0.1.0
 */
class Square extends Rectangle {
  /**
   * The length of the sides of the square.
   * @var int
   * @since 0.1.0
   */
  private int $sides {
    get => $this->sides;
    // Sets the side length to the absolute value of the new length.
    set => $this->sides = abs($value);
  }

  /**
   * @param int $sides The length of the square's sides.
   * @since 0.1.0
   */
  public function __construct(int $sides) {
    // Run the Rectangle constructor to allow the "getArea()" 
    // function to work without overriding it.
    parent::__construct($sides, $sides);

    // Initialise the square's sides' length. 
    $this->sides = $sides;
  }
}
