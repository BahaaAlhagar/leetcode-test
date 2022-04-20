<?php

class Solution
{
    /**
     * @param array $prices
     * @return Integer
     */
    public function maxProfit(array $prices)
    {
        if (count($prices) < 2) {
            return 0;
        }

        $profit = 0;
        $lastIndex = count($prices) - 1;

        for ($i = 0; $i < $lastIndex; ++$i) {
            if ($i === $lastIndex) {
                continue;
            }

            for ($y = $i + 1; $y <= $lastIndex; ++$y) {
                $profit = max($profit, $prices[$y] - $prices[$i]);
            }
        }

        return $profit;
    }
}
