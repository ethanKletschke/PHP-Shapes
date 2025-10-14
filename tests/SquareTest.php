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
    $s1 = new Square(5); // Area = 25
    $s2 = new Square(10); // Area = 100
    $s3 = new Square(15); // Area = 225

    $this->assertEquals( $s1->getArea(), 25);
    $this->assertEquals($s2->getArea(), 100);
    $this->assertEquals($s3->getArea(), 225);
  }

  public function testSidesPropertyHook(): void {
    $s = new Square(5);

    $this->assertEquals($s->sides, 5);
  }
}
