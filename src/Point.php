<?php
declare(strict_types=1);
namespace PHPShapes\Shapes;

/**
 * Defines a singular point on the Cartesian plane with an X-coordinate
 * and a Y-coordinate.
 * @author EthanKletschke <ethankletschke@outlook.com>
 * @since 0.1.0
 */
class Point {
  /**
   * The X-coordinate of the point on the Cartesian plane.
   * @var int
   * @since 0.1.0
   */
  private int $x;
  /**
   * The Y-coordinate of the point on the Cartesian plane.
   * @var int
   * @since 0.1.0
   */
  private int $y;

  /**
   * @param int $x the X-coordinate on the Cartesian plane. 
   * @param int $y the Y-coordinate on the Cartesian plane.
   * @since 0.1.0
   */
  public function __construct(int $x, int $y) {
    $this->x = $x;
    $this->y = $y;
  }

  /**
   * Gets the value of the X-coordinate of this point.
   * @return int the X-coordinate of the point.
   * @since 0.1.0
   */
  public function getX(): int {
    return $this->x;
  }

  /**
   * Gets the value of the Y-coordinate of this point.
   * @return int the Y-coordinate of the point.
   * @since 0.1.0
   */
  public function getY(): int {
    return $this->y;
  }

  /**
   * Sets the value of the X-coordinate of this point.
   * @param int $x The new X value.
   * @return void 
   * @since 0.2.0
   */
  public function setX(int $x): void {
    $this->x = $x;
  }

  /**
   * Sets the value of the Y-coordinate of this point.
   * @param int $y The new Y value.
   * @return void
   * @since 0.3.0
   */
  public function setY(int $y): void {
    $this->y = $y;
  }

  /**
   * Determines whether the current point is situated on the
   * Cartesian plane's origin of <code>(0,0)</code>.
   * @return bool <code>true</code> if the x and y coordinates are both 0.
   * @since 0.1.0
   */
  public function isOrigin(): bool {
    return ($this->x === 0) && ($this->y === 0);
  }

  /**
   * Determines whether the point passed to the method is situated on the
   * Cartesian plane's origin of <code>(0,0)</code>.
   * @param \PHPShapes\Shapes\Point $p A <code>Point</code> object
   * @return bool <code>true</code> if the x and y coordinates of <code>$p</code> are both 0.
   * @static
   * @since 0.1.0
   */
  public static function pointIsOrigin(Point $p): bool {
    return ($p->x === 0) && ($p->y === 0);
  }

  /**
   * Determines whether the current Point object overlaps (has equal points) to another
   * Point object.
   * @param \PHPShapes\Shapes\Point $p1 The point to compare.
   * @return bool true if the points are equal.
   * @since 0.2.0
   */
  public function overlapsWith(Point $p1): bool {
    return ($this->x === $p1->x) && ($this->y === $p1->y); 
  }

  /**
   * Determines whether the points passed to the method overlap, i.e.
   * the X and Y of both points are equal to each other.
   * @param \PHPShapes\Shapes\Point $p1 The first point.
   * @param \PHPShapes\Shapes\Point $p2 The second point.
   * @return bool <code>true</code> if the points overlap.
   * @static
   * @since 0.1.0
   */
  public static function pointsOverlap(Point $p1, Point $p2): bool {
    return ($p1->x === $p2->x) && ($p1->y === $p2->y);
  }

  /**
   * Finds the distance between the current point and the point passed to the method.
   * @param \PHPShapes\Shapes\Point $p The point to measure the distance of.
   * @return float The distance between the 2 points.
   * @since 0.4.0
   */
  public function distanceBetween(Point $p): float {
    // Calculate the distance between the 2 points.
    $distance = sqrt($this->sqr($this->x - $p->x) + $this->sqr($this->y - $p->y));

    return $distance;
  }

  /**
   * Finds the distance between 2 points.
   * @param \PHPShapes\Shapes\Point $p1 Point 1.
   * @param \PHPShapes\Shapes\Point $p2 Point 2.
   * @return float The distance between the 2 points.
   * @static 
   * @since 0.4.0
   */
  public static function distance(Point $p1, Point $p2): float {
    // Calculate the distance between the 2 points.
    $distance = sqrt(self::square($p1->x - $p2->x) + self::square($p1->y - $p2->y));

    return $distance;
  }

  // private methods only used in this class
  /**
   * Returns the square (power of 2) of a number.
   * @param float|int $num The number to raise to the power of 2.
   * @return float|int The result of the exponentiation.
   * @since 0.4.0
   */
  private function sqr(float|int $num): float|int {
    return $num * $num;
  }

  /**
   * Returns the square of a number. Static version of "sqr", used within other 
   * static methods.
   * @param float|int $num The number to raise to the power of 2.
   * @return float|int The result of the exponentiation.
   * @static
   * @since 0.4.0
   */
  private static function square(float|int $num): float|int {
    return $num * $num;
  }
}
