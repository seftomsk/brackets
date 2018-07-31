<?php

namespace Seftomsk\Brackets;

/**
 * Class Research
 * @package Seftomsk\Brackets
 */
class Research implements ResearchInterface
{
    /**
     * @var DataInterface
     */
    private $data;

    /**
     * @var string
     */
    private $openBracket = '';

    /**
     * @var string
     */
    private $closeBracket = '';

    public function __construct(DataInterface $data)
    {
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function getOpenBracket(): string
    {
        return $this->openBracket;
    }

    /**
     * @return string
     */
    public function getCloseBracket(): string
    {
        return $this->closeBracket;
    }

    /**
     * @param string $openBracket
     * @throws \LengthException if length open bracket < or > 1
     */
    public function setOpenBracket(string $openBracket): void
    {
        if (strlen($openBracket) !== 1) {
            throw new \LengthException('Length open bracket must be 1 symbol');
        }

        $this->openBracket = $openBracket;
    }

    /**
     * @param string $closeBracket
     * @throws \LengthException if length close bracket < or > 1
     */
    public function setCloseBracket(string $closeBracket): void
    {
        if (strlen($closeBracket) !== 1) {
            throw new \LengthException('Length close bracket must be 1 symbol');
        }

        $this->closeBracket = $closeBracket;
    }

    /**
     * @return bool
     */
    public function isValid(): bool
    {
        $this->validateBrackets();
        $openBracket = $this->getOpenBracket();
        $closeBracket = $this->getCloseBracket();
        $count = 0;
        foreach ($this->data as $symbol) {
            switch ($symbol) {
                case $openBracket:
                    $count++;
                    break;
                case $closeBracket:
                    $count--;
                    break;
            }
            if ($count < 0) {
                return false;
            }
        }
        return !$count;
    }

    /**
     * @throws \InvalidArgumentException
     */
    public function validateBrackets(): void
    {
        if ($this->openBracket === $this->closeBracket) {
            throw new \InvalidArgumentException('Open bracket and close bracket must not be the same');
        }
    }
}
