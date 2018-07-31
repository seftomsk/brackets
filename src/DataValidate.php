<?php

namespace Seftomsk\Brackets;

/**
 * Class DataValidate
 * @package Seftomsk\Brackets
 */
class DataValidate implements DataValidateInterface
{
    /**
     * @var DataInterface
     */
    private $data;

    public function __construct(DataInterface $data)
    {
        $this->data = $data;
    }

    /**
     * @throws \LengthException
     * @throws \InvalidArgumentException
     */
    public function validate(): void
    {
        if (empty($this->data->getString())) {
            throw new \LengthException('String length is invalid');
        }

        foreach (str_split($this->data->getString()) as $symbol) {
            if (!in_array($symbol, $this->data->getAllowedSymbols())) {
                throw new \InvalidArgumentException("Symbol \"{$symbol}\" is not allowed");
            }
        }
    }
}
