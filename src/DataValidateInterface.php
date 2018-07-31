<?php

namespace Seftomsk\Brackets;

/**
 * Interface DataValidateInterface
 * @package Seftomsk\Brackets
 */
interface DataValidateInterface
{
    /**
     * @throws \LengthException
     * @throws \InvalidArgumentException
     */
    public function validate(): void;
}
