<?php

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums)
    {
        $n = count($nums);
        if ($n == 0) return 0;

        $k = 1;
        for ($i = 1; $i < $n; $i++) {
            if ($nums[$i] != $nums[$i - 1]) {
                $nums[$k] = $nums[$i];
                $k++;
            }
        }
        return $k;
    }
}

$nums = [0,0,1,1,1,2,2,3,3,4];
$solution = new Solution();
$k = $solution->removeDuplicates($nums);

echo "k = $k, nums = [" . implode(",", array_slice($nums, 0, $k)) . "]\n";
