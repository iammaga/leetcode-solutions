<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val)
    {
        $nums = array_values(array_filter($nums, fn($num) => $num !== $val));
        return count($nums);
    }
}

$nums = [0, 1, 2, 2, 3, 0, 4, 2];
$val = 2;
$solution = new Solution();
$k = $solution->removeElement($nums, $val);

echo "k = $k, nums = [" . implode(",", $nums) . "]\n";
