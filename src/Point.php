<?php
declare(strict_types=1);
namespace PHPShapes\Shapes;

/**
 * Defines a singular point on the Cartesian plane with an X-coordinate
 * and a Y-coordinate.
 * @author EthanKletschke <ethankletschke@outlook.com>
 */
class Point {
  /**
   * The X-coordinate of the point on the Cartesian plane.
   * @var int
   */
  private int $x;
  /**
   * The Y-coordinate of the point on the Cartesian plane.
   * @var int
   */
  private int $y;

  /**
   * @param int $x the X-coordinate on the Cartesian plane. 
   * @param int $y the Y-coordinate on the Cartesian plane.
   */
  public function __construct(int $x = 0, int $y = 0) { // Default vals allow for 
    $this->x = $x;
    $this->y = $y;
  }

  /**
   * Gets the value of the X-coordinate of this point.
   * @return int the X-coordinate of the point.
   */
  public function getX(): int {
    return $this->x;
  }

  /**
   * Gets the value of the Y-coordinate of this point.
   * @return int the Y-coordinate of the point.
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
   * Determines whether the current point is situated on the
   * Cartesian plane's origin of <code>(0,0)</code>.
   * @return bool <code>true</code> if the x and y coordinates are both 0.
   */
  public function isOrigin(): bool {
    return ($this->x === 0) && ($this->y === 0);
  }

  /**
   * Determines whether the point passed to the method is situated on the
   * Cartesian plane's origin of <code>(0,0)</code>.
   * @param \PHPShapes\Shapes\Point $p A <code>Point</code> object
   * @return bool <code>true</code> if the x and y coordinates of <code>$p</code> are both 0.
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
   */
  public static function pointsOverlap(Point $p1, Point $p2): bool {
    return ($p1->x === $p2->x) && ($p1->y === $p2->y);
  }
}
