<?php
declare(strict_types=1);

/** Create an SnailShell
 * @param int $x
 * @return array
 */
function createSnailShell(int $x): array  {
  $snailShell = [];
  if($x > 0) {
    // initialize in [0, 0]
    $topIndex = $leftIndex = 0;
     // initialize in [3, 3]
    $bottomIndex = $rightIndex = $x - 1;
    $number = 1;
    //Evaluate while there are movements
    while ($topIndex <= $bottomIndex && $leftIndex <= $rightIndex) {
        //Top column: Moves to the right
        for ($i = $leftIndex; $i <= $rightIndex; $i++) {
          $snailShell[$topIndex][$i] = $number++;
        }
        //Right column: Moves down
        $topIndex++;
        for ($i = $topIndex; $i <= $bottomIndex; $i++) {
          $snailShell[$i][$rightIndex] = $number++;
        }
        //Bottom column: Moves to the left
        $rightIndex--;
        for ($i = $rightIndex; $i >= $leftIndex; $i--) {
          $snailShell[$bottomIndex][$i] = $number++;
        }
        //Left column: Moves to the right
        $bottomIndex--;
        for ($i = $bottomIndex; $i >= $topIndex; $i--) {
          $snailShell[$i][$leftIndex] = $number++;
        }
        $leftIndex++;
      }
      array_walk($snailShell, 'ksort');
    }
  return $snailShell;
}
