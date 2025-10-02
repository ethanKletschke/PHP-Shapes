<?php
declare(strict_types=1);
namespace Shapes;

class Point {
  private int $x;
  private int $y;

  public function __construct(int $x, int $y) {
    $this->x = $x;
    $this->y = $y;
  }

  public function isOrigin(): bool {
    return ($this->x === 0) && ($this->y === 0);
  }

  public static function pointIsOrigin(Point $p): bool {
    return ($p->x === 0) && ($p->y === 0);
  }
}
