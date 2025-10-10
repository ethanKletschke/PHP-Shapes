<?php
declare(strict_types=1);

use PHPShapes\Shapes\Square;
use PHPUnit\Framework\TestCase;

require __DIR__ . "/../src/Rectangle.php";
require __DIR__ . "/../src/Square.php";

/**
 * Tests the <code>Square</code> class.
 * @author EthanKletschke <ethankletschke@outlook.com>
 * @since 0.4.0
 */
class SquareTest extends TestCase {
  /**
   * Tests the "getArea()" method.
   * @return void
   * @since 0.4.0
   */
  public function testGetArea(): void {
    $s1 = new Square(5); // Area = 25
    $s2 = new Square(10); // Area = 100
    $s3 = new Square(15); // Area = 225

    $this->assertEquals( $s1->getArea(), 25);
    $this->assertEquals($s2->getArea(), 100);
    $this->assertEquals($s3->getArea(), 225);
  }
}
