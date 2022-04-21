<?php

class Solution
{
    /**
     * @param Integer[] $prices
     * @return Integer
     */
    public function maxProfit($prices)
    {
        $min = PHP_INT_MAX;
        $profit = 0;

        for ($i = 0; $i < count($prices); ++$i) {
            if ($prices[$i] < $min) {
                $min = $prices[$i];
            } else {
                $profit = max($profit, $prices[$i] - $min);
            }
        }

        return $profit;
    }
}
