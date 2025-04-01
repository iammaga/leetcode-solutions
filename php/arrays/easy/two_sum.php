<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target)
    {
        $map = [];
        foreach ($nums as $i => $num) {
            $complement = $target - $num;
            if (isset($map[$complement])) {
                return [$map[$complement], $i];
            }
            $map[$num] = $i;
        }
        return [];
    }
}

$solution = new Solution();
print_r($solution->twoSum([2, 7, 11, 15], 9));