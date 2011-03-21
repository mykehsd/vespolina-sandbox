<?php

namespace Vespolina\MonetaryBundle\Model;

use Vespolina\MonetaryBundle\Model\CurrencyInterface;

abstract class Currency implements CurrencyInterface
{
    public function __construct()
    {

    }

    /**
     * @inheritdoc
     */
    public function getCurrencyCode()
    {

    }

    /**
     * @inheritdoc
     */
    public function getSymbol()
    {

    }

    /**
     * @inheritdoc
     */
    public function getPrecision()
    {

    }

    /**
     * @inheritdoc
     */
    public function formatAmount($amount)
    {

    }

    /**
     * @inheritdoc
     */
    public function getExchangeRate()
    {

    }

    /**
     * @inheritdoc
     */
    public function getExchangeDateTime()
    {

    }

    /**
     * @inheritdoc
     */
    public function getBaseCurrency()
    {

    }

    /**
     * @inheritdoc
     */
    public function exchange($amount)
    {

    }
}
