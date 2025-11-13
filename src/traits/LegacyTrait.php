<?php

trait LegacyTrait
{
    /**
     * Esegue operazioni su un array usando each() (pattern compatibile con PHP 7.2).
     *
     * @param array $items
     * @return string
     */
    public function traitMethod(array $items)
    {
        $result = '';
        reset($items);
        // uso di each() per avere un caso di refactor verso foreach in PHP 8+
        while ($pair = each($items)) {
            // each() ritorna [0 => key, 1 => value, 'key' => key, 'value' => value]
            $result .= (string) $pair[1] . ';';
        }
        return $result;
    }
}