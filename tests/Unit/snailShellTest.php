<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class StackTest extends TestCase
{

  /** Test return type array **/
  public function testSnailShellIsAnArray(): void
    {
      require_once './snailShell.php';
      $result = createSnailShell(4);
      $this->assertIsArray($result);
    }

    /** Test return array 3x3 **/
    public function testSnailShellThree(): void
    {
      require_once './snailShell.php';
      $expectedArray = [
          [1, 2, 3],
          [8, 9, 4],
          [7, 6, 5],
      ];
      $result = createSnailShell(3);
      $this->assertEquals($expectedArray, $result);
    }

    /** Test return array 4x4 **/
    public function testSnailShellFour(): void
    {
      require_once './snailShell.php';
      $expectedArray = [
          [1, 2, 3, 4],
          [12, 13, 14, 5],
          [11, 16, 15, 6],
          [10, 9, 8, 7],
      ];
      $result = createSnailShell(4);
      $this->assertEquals($expectedArray, $result);
    }

    /** Test return array 5x5 **/
    public function testSnailShellFive(): void
    {
      require_once './snailShell.php';
      $expectedArray = [
          [1, 2, 3, 4, 5],
          [16, 17, 18, 19, 6],
          [15, 24, 25, 20, 7],
          [14, 23, 22, 21, 8],
          [13, 12, 11, 10, 9],
      ];
      $result = createSnailShell(5);
      $this->assertEquals($expectedArray, $result);
    }

    /** Test return empty array **/
    public function testEmptySnailShell(): void
    {
      require_once './snailShell.php';
      $expectedArray = [];
      $result = createSnailShell(0);
      $this->assertEquals($expectedArray, $result);
    }

    /** Test throw Exception with string argument **/
    public function testSnailShellException(): void
    {
      require_once './snailShell.php';
      $this->expectException(TypeError::class);
      createSnailShell('f');
    }
}