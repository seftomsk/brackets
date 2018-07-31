<?php

namespace Seftomsk\Brackets;

/**
 * Interface DataInterface
 * @package Seftomsk\Brackets
 */
interface DataInterface
{
    /**
     * @return string
     */
    public function getString(): string;

    /**
     * @return array
     */
    public function getAllowedSymbols(): array;
}
