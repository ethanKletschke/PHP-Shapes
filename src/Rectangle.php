<?php
declare(strict_types=1);
namespace Shapes;

class Rectangle implements IShape {
  private int $length;
  private int $width;

  public function __construct(int $length, int $width) {
    $this->length = $length;
    $this->width = $width;
  }

  public function getArea(): int {
    return $this->length * $this->width;
  }
}
