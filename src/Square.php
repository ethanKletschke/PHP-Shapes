<?php
declare(strict_types=1);
namespace Shapes;

class Square extends Rectangle {
  private int $sides;

  public function __construct(int $sides) {
    parent::__construct($sides, $sides);
    $this->sides = $sides;
  }
}
