<?php

namespace App;

class LegacyClass
{
    /**
     * @var array
     */
    public $items;

    /**
     * Costruttore senza typed properties (PHP 7.2 style).
     *
     * @param array $items
     */
    public function __construct(array $items = [])
    {
        $this->items = $items;
    }

    /**
     * Esegue una funzione globale legacy con call_user_func (compatibile PHP 7.2).
     *
     * @return string
     */
    public function legacyMethod()
    {
        return call_user_func('legacyFunction', 'Marco');
    }

    /**
     * Somma i valori interni usando each() per dare a Rector un caso di refactor.
     *
     * @return int
     */
    public function sumValues()
    {
        $sum = 0;
        reset($this->items);
        while ($pair = each($this->items)) {
            $sum += (int) $pair[1];
        }
        return $sum;
    }
}