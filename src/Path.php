<?php
declare(strict_types=1);
namespace PHPShapes\Shapes;

/**
 * Defines a path made up of multiple Points.
 * @author EthanKletschke <ethankletschke@outlook.com>
 * @since 0.2.0
 */
class Path {
  /**
   * The number of points in the path.
   * @var int
   * @since 0.3.0
   */
  private int $len {
    get => count($this->points);
  }

  /**
   * An array of points that make up the path.
   * @var \PHPShapes\Shapes\Point[]
   * @since 0.2.0
   */
  private array $points;

  /**
   * @param int[][] $points A two-dimensional array of integers to initialise the path with. If passed
   * an empty array, will append null to the path.
   */ 
  public function __construct(array $points) {
    // If passed an empty array
    if (count($points) === 0) {
      // Append null to the path, to be set later on.
      $this->points[] = null;
    } else {
      // For every point passed to the constructor
      foreach ($points as [$x, $y]) {
        // Append a new Point object to the path.
        $this->points[] = new Point($x, $y);
      }
    }
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
   * @return int the count of the points - 1, or 0 if empty.
   * @since 0.2.0
   */
  public function getHighestIndex(): int {
    if (count($this->points) === 0) {
      return 0;
    }

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

  /**
   * Sets a point at a specific index. It is recommended to use
   * this when passing an empty array to the constructor, or if
   * you want to re-set a point at a specific index.
   * @param int $x The new X value.
   * @param int $y The new Y value.
   * @param int $index The index at which to set the point. Default value is 0.
   * @return void
   * @since 0.4.0
   */
  public function setPointAt(int $x, int $y, int $index = 0): void {
    $this->points[$index] = new Point($x, $y);
  }
}
