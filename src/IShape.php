<?php
declare(strict_types=1);
namespace Shapes;

interface IShape {
  public function getArea(): int | float;
}
