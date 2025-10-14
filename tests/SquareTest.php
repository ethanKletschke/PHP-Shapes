<?php
declare(strict_types=1);

// Dependencies for the Square class.
require_once __DIR__ . "/../src/IShape.php";
require_once __DIR__ . "/../src/Rectangle.php";
require_once __DIR__ . "/../src/Square.php";

use \PHPShapes\Shapes\Square;
use \PHPUnit\Framework\TestCase;

/**
 * Tests the <code>Square</code> class.
 * @author EthanKletschke <ethankletschke@outlook.com>
 * @since 0.4.0
 */
class SquareTest extends TestCase {
  public function testGetArea(): void {
    $s1 = new Square(sides: 5); // Area = 25
    $s2 = new Square(sides: 10); // Area = 100
    $s3 = new Square(sides: 15); // Area = 225

    $this->assertEquals(expected: $s1->getArea(), actual: 25);
    $this->assertEquals(expected: $s2->getArea(), actual: 100);
    $this->assertEquals(expected: $s3->getArea(), actual: 225);
  }

  public function testSidesPropertyHook(): void {
    $s = new Square(sides: 5);

    $this->assertEquals(expected: $s->sides, actual: 5);
  }
}
