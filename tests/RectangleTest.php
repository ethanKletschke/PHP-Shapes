<?php
declare(strict_types=1);

require_once __DIR__ . "/../src/IShape.php";
require_once __DIR__ . "/../src/Rectangle.php";

use \PHPShapes\Shapes\Rectangle;
use \PHPUnit\Framework\TestCase;

/**
 * Tests the <code>Rectangle</code> Class.
 * @author EthanKletschke <ethankletschke@outlook.com>
 * @since 0.6.0
 */
class RectangleTest extends TestCase {
  public function testGetArea(): void {
    $r = new Rectangle(length: 4, width: 5);

    $this->assertEquals(expected: 20, actual: $r->getArea());
  }
}
