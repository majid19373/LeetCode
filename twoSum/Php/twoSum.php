<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum(array $nums, int $target): array {
        $hashMap = [];
        foreach ($nums as $key => $num) {
            $difference = $target - $num;
            if(isset($hashMap[$difference])) {
                return [$key, $hashMap[$difference]];
            }
            $hashMap[$num] = $key;
        }
        return [];
    }
}