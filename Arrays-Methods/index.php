<?php


// Array creation

$createIndexedArr = array(1, 2, 3, 4);
$createAssociatedArr = array("a" => 1, "b" => 2, "c" => 3, "d" => 4);
echo $createIndexedArr;
echo $createAssociatedArr;

// Array range
$arrRange = range(0, 10);
echo $arrRange;

// count 
$countNumberOfelemntsInArr = count([1, 2, 3, 4, 85]);
echo $countNumberOfelemntsInArr;

// array_keys
echo array_keys($countNumberOfelemntsInArr);

// array_values
echo array_values($countNumberOfelemntsInArr);

// in_array
echo in_array(1, $countNumberOfelemntsInArr);

// array_search
echo array_search(2, $countNumberOfelemntsInArr);

// array_merge
$arr1 = [0, 1, 2];
$arr2 = [3, 4, 5];
echo array_merge($arr1, $arr2);

// pop, push, unshift, shift

// splice, slice, replace

$arr3 = array_fill(0, 5, "
Farooq");
echo $arr3;

// sort
echo sort($arr1);

// sort an associative array in ascending order on the base of values
echo asort($createAssociatedArr);

// sort an associative array on the base of keys
echo ksort($createAssociatedArr);

// sort an array in descending order
echo rsort($arr2);

// reverse the array
echo array_reverse($arr3);

// filter
$nums = [1, 22, 43, 59, 53, 51, 34, 24];
$filteredNums = array_filter($nums, fn(int $num):bool => $num > 2);
echo "<pre>";
print_r($filteredNums);
echo "<pre/>";

// map
$mixednums = [1,5,8,9,3,4,5];
$squaredNums = array_map(fn (int $num):int => $num * $num ,$mixednums);
echo "<pre>";
print_r($squaredNums);
echo "<pre/>";

// walk
$mixedScores = [1, 2, 3, 4];
array_walk($mixedScores, fn (int $score):int => $score ** $score);
print_r($mixedScores);

// diff, intersection, duplicates removal

// array_sum, array_product
// array_rand