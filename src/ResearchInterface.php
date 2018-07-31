<?php

namespace Seftomsk\Brackets;

/**
 * Interface ResearchInterface
 * @package Seftomsk\Brackets
 */
interface ResearchInterface
{
    /**
     * @param string $openBracket
     * @throws \LengthException if length open bracket < or > 1
     */
    public function setOpenBracket(string $openBracket): void;

    /**
     * @param string $closeBracket
     * @throws \LengthException if length close bracket < or > 1
     */
    public function setCloseBracket(string $closeBracket): void;

    /**
     * @return string
     */
    public function getOpenBracket(): string;

    /**
     * @return string
     */
    public function getCloseBracket(): string;

    /**
     * @return bool
     */
    public function isValid(): bool;

    /**
     * @throws \InvalidArgumentException
     * @throws \LengthException
     */
    public function validateBrackets(): void;
}
