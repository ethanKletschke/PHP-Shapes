<?php
declare(strict_types=1);

// Get the classes to test
require_once __DIR__ . "/../src/Point.php";
require_once __DIR__ . "/../src/Path.php";

use PHPShapes\Shapes\Path;
use PHPShapes\Shapes\Point;
use PHPUnit\Framework\TestCase;

/**
 * Tests the <code>Path</code> class.
 * @author EthanKletschke <ethankletschke@outlook.com>
 * @since 0.4.0
 */
final class PathTest extends TestCase {
  public function testGetHighestIndex(): void {
    // Instantiate a Path with 4 points.
    $p1 = new Path(points: [
      [1,2],
      [3,4],
      [5,6],
      [7,8]
    ]);

    // Instantiate an empty Path.
    $p2 = new Path(points: []);

    // Test the highest index of path 1
    $this->assertEquals(expected: 3, actual: $p1->getHighestIndex());

    // Test the highest index of an empty path (should return 0)
    $this->assertEquals(expected: 0, actual: $p2->getHighestIndex());
  }

  public function testAddPoint(): void {
    // Instantiate a path.
    $p = new Path(points: [
      [1,2],
      [3,4],
      [5,6],
      [7,8]
    ]);

    // Append a new point to the path.
    $p->addPoint(x: 5, y: 0);

    // Assert that the end point's values are equal to the point that was added.
    $this->assertEquals(expected: 5, actual: $p->getPointAt(index: $p->getHighestIndex())->getX());
    $this->assertEquals(expected: 0, actual: $p->getPointAt(index: $p->getHighestIndex())->getY());
  }

  public function testGetPointAt(): void {
    // Instantiate a new Path
    $p = new Path(points: [
      [1,2],
      [3,4],
      [5,6],
      [7,8]
    ]);

    // Assert that the returned point is an instance of the Point class.
    $this->assertInstanceOf(expected: Point::class, actual: $p->getPointAt(1));

    // Assert that the values of X and Y are correct.
    $this->assertEquals(expected: 3, actual: $p->getPointAt(index: 1)->getX());
    $this->assertEquals(expected: 4, actual: $p->getPointAt(index: 1)->getY());

    // Assert that the values of X and Y at a negative index are equal to the first point.
    $this->assertEquals(expected: $p->getPointAt(index: 0)->getX(), actual: $p->getPointAt(-5)->getX());
    $this->assertEquals(expected: $p->getPointAt(index: 0)->getY(), actual: $p->getPointAt(-5)->getY());

    // Assert that the values of X and Y at an high out-of-bounds index are equal to the last point.
    $this->assertEquals(
      expected: $p->getPointAt(index: $p->getHighestIndex())->getX(), 
      actual: $p->getPointAt(index: 1000)->getX()
    );
    $this->assertEquals(
      expected: $p->getPointAt(index: $p->getHighestIndex())->getY(), 
      actual: $p->getPointAt(index: 1000)->getY()
    );
  }

  public function testLengthPropertyHook(): void {
    $p1 = new Path(points: [
      [1,4],
      [4,3],
      [2,7],
      [4,2]
    ]);

    $p2 = new Path(points: [
      [1,2],
      [3,4]
    ]);

    $p3 = new Path(points: []);

    $this->assertEquals(expected: $p1->len, actual: 4);
    $this->assertEquals(expected: $p2->len, actual: 2);
    $this->assertEquals(expected: $p3->len, actual: 0);
  }
}
