<?php
declare(strict_types=1);

use PHPShapes\Shapes\Path;
use PHPShapes\Shapes\Point;
use PHPUnit\Framework\TestCase;

// Get the classes to test
require __DIR__ . "/../src/Point.php";
require __DIR__ . "/../src/Path.php";

/**
 * Tests the <code>Path</code> class.
 * @author EthanKletschke <ethankletschke@outlook.com>
 * @since 0.4.0
 */
final class PathTest extends TestCase {
  public function testGetHighestIndex(): void {
    // Instantiate a Path with 4 points.
    $p1 = new Path([
      [1,2],
      [3,4],
      [5,6],
      [7,8]
    ]);

    // Instantiate an empty Path.
    $p2 = new Path([]);

    // Test the highest index of path 1
    $this->assertEquals(3, $p1->getHighestIndex());

    // Test the highest index of an empty path (should return 0)
    $this->assertEquals(0, $p2->getHighestIndex());
  }

  public function testAddPoint(): void {
    // Instantiate a path.
    $p = new Path([
      [1,2],
      [3,4],
      [5,6],
      [7,8]
    ]);

    // Append a new point to the path.
    $p->addPoint(5, 0);

    // Assert that the end point's values are equal to the point that was added.
    $this->assertEquals(5, $p->getPointAt($p->getHighestIndex())->getX());
    $this->assertEquals(0, $p->getPointAt($p->getHighestIndex())->getY());
  }

  public function testGetPointAt(): void {
    // Instantiate a new Path
    $p = new Path([
      [1,2],
      [3,4],
      [5,6],
      [7,8]
    ]);

    // Assert that the returned point is an instance of the Point class.
    $this->assertInstanceOf(Point::class, $p->getPointAt(1));

    // Assert that the values of X and Y are correct.
    $this->assertEquals(3, $p->getPointAt(1)->getX());
    $this->assertEquals(4, $p->getPointAt(1)->getY());
  }
}
