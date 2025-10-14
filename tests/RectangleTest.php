<?php
declare(strict_types=1);

require_once __DIR__ . "/../src/IShape.php";
require_once __DIR__ . "/../src/Rectangle.php";

use \PHPShapes\Shapes\Rectangle;
use \PHPUnit\Framework\TestCase;

/**
 * Tests the <code>Rectangle</code> class.
 * @author EthanKletschke <ethankletschke@outlook.com>
 * @since 0.6.0
 */
class RectangleTest extends TestCase {
  public function testGetArea(): void {
    // Instantiate a rectangle
    $rect = new Rectangle(length: 4, width: 5);

    // Assert that the area is equal to 20.
    $this->assertEquals(expected: $rect->getArea(), actual: 20);
  }
}
