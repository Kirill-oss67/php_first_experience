<?php




function foo($int)
{

   $int++;
   return $int . '<br>';
}

echo foo(int: 0);

function foo1($int, $int2, $int3)
{

   $int++;
   $int2++;
   $int3++;
   return $int + $int2 + $int3 . '<br>';
}
echo foo1(0, 1, 2);

function foo2($int, $int2 = 0, $int3 = 1)
{

   $int++;
   $int2++;
   $int3++;
   return $int + $int2 + $int3 . '<br>';
}
echo foo2(int: 4);
