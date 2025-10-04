<?php
declare(strict_types=1);
namespace PHPShapes\Shapes;

/**
 * Defines a four-sided shape with all four sides equal in length.
 * @author EthanKletschke <ethankletschke@outlook.com>
 */
class Square extends Rectangle {
  /**
   * The length of the sides of the square.
   * @var int
   */
  private int $sides {
    get => $this->sides;
    // Sets the side length to 1 or the assigned value depending on which is bigger.
    // Prevents an invalid side length from being entered.
    set => $this->sides = max(1, $value);
  }

  /**
   * @param int $sides The length of the square's sides.
   */
  public function __construct(int $sides) {
    // Run the Rectangle constructor to allow the "getArea()" function to work without overriding it.
    parent::__construct($sides, $sides);
    // Initialise the square's sides' length. 
    $this->sides = $sides;
  }
}
