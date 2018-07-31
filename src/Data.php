<?php

namespace Seftomsk\Brackets;

/**
 * Class Data
 * @package Seftomsk\Brackets
 */
class Data implements
    DataInterface,
    \IteratorAggregate
{
    /**
     * @var string
     */
    private $string;

    /**
     * @var array
     */
    private $allowedSymbols = [];

    public function __construct(string $string, array $allowedSymbols)
    {
        $this->string = $string;
        $this->allowedSymbols = $allowedSymbols;
    }

    /**
     * @return string
     */
    public function getString(): string
    {
        return $this->string;
    }

    /**
     * @return array
     */
    public function getAllowedSymbols(): array
    {
        return $this->allowedSymbols;
    }

    /**
     * @return \IteratorAggregate
     */
    public function getIterator(): \ArrayIterator
    {
        return new \ArrayIterator(str_split($this->string));
    }
}
