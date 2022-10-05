<?php

class Solution
{

    function twoSum($nums, $target) {
        $arr = [];
        $length = count($nums);
        for($x = 0; $x < $length; $x++){
            for($y = $x + 1; $y < $length; $y++){
            if($nums[$x] + $nums[$y] == $target){
                $arr[0] = $x;
                $arr[1] = $y;
                break;
            }
            }
        }
        return $arr;
    }


}

$obj = new Solution();
$nums = [3,2,3];
$target = 6;
$result = $obj->twoSum($nums, $target);

print_r($result);

