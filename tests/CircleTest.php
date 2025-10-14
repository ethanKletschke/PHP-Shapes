<?php
declare(strict_types=1);

// Dependencies for Circle tests
require_once __DIR__ . "/../src/IShape.php";
require_once __DIR__ . "/../src/Circle.php";

use \PHPShapes\Shapes\Circle;
use \PHPUnit\Framework\TestCase;

/**
 * Tests the Circle class.
 * @author EthanKletschke <ethankletschke@outlook.com>
 * @since 0.5.0
 */
class CircleTest extends TestCase {
  public function testCenterIsOrigin(): void {
    // Circle with center on origin.
    $originCircle = new Circle(5, 0, 0);
    // Circle with center not on origin.
    $nonOriginCircle = new Circle(5, 1, 2);

    $this->assertEquals($originCircle->centerIsOrigin(), true);
    $this->assertEquals($nonOriginCircle->centerIsOrigin(), false);
  }

  public function testDiameterPropertyHook(): void {
    $circle = new Circle(5, 2, 3);

    $this->assertEquals($circle->diameter, 10);
  }

  public function testCircumferencePropertyHook(): void {
    $circle = new Circle(5, 1, 3);

    $this->assertEquals(round($circle->circumference, 1), 31.4);
  }

  public function testGetArea(): void {
    $circle = new Circle(5, 10, 13);

    $this->assertEquals(round($circle->getArea(), 2), 78.54);
  }

  public function testCreateFromCircleString(): void {
    $circle = Circle::createFromCircleString("<1,(2,3)>");

    // Assert that the circle object was created.
    $this->assertNotNull($circle);

    // Assert that the values passed are correctly assigned via the string.
    $this->assertEquals($circle->getRadius(), 1);
    $this->assertEquals($circle->getCenterPoint()->getX(), 2);
    $this->assertEquals($circle->getCenterPoint()->getY(), 3);
  }
}
