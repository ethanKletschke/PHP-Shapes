<?php
declare(strict_types=1);
namespace PHPShapes\Shapes;

/**
 * Defines a path made up of multiple Points.
 * @author EthanKletschke <ethankletschke@outlook.com>
 */
class Path {
  /**
   * An array of points that make up the path.
   * @var \PHPShapes\Shapes\Point[]
   */
  private array $points;

  /**
   * @param int[][] $points A two-dimensional array of integers to initialise the path with.
   * @since 0.2.0
   */ 
  public function __construct(array $points) {
    foreach ($points as [$x, $y]) {
      // Append a new Point to the path.
      $this->points[] = new Point($x, $y);
    }

    // Update the length. 
  }

  /**
   * Appends a new point to the path.
   * @param int $x The X-coordinate of the new point.
   * @param int $y The Y-coordinate of the new point.
   * @return void
   * @since 0.2.0
   */
  public function addPoint(int $x, int $y): void {
    $this->points[] = new Point($x, $y);
  }

  /**
   * Finds the highest index of the path's points array.
   * @return int the count of the points - 1.
   */
  public function getHighestIndex(): int {
    return count($this->points) - 1;
  }

  /**
   * Gets a point from the path at the specified index.
   * @param int $index the zero-based index of the path's point.
   * @return Point
   * @since 0.2.0
   */
  public function getPointAt(int $index): Point {
    if ($index < 0) {
      // Return the start of the path if the index is below 0.
      return $this->points[0];
    } elseif ($index > $this->getHighestIndex()) {
      // return the end of the path if the index is greater than the highest index.
      return $this->points[$this->getHighestIndex()];
    }

    // Return the point at the specified index if it is a valid index.
    return $this->points[$index];
  }
}
