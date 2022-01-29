<?php

namespace Kdabrow\CryptoWorkerContract\Strategy;

use Illuminate\Support\Collection;
use Kdabrow\CryptoWorkerContract\Exchange\DataObjects\Kline;
use Kdabrow\CryptoWorkerContract\Strategy\DataObjects\Calculation;

interface StrategyInterface
{
    /**
     * Performs all needed calculations: indicators, checks etc.
     *
     * @param Collection<int, Kline> $klines
     * @return Calculation Calculations for last kline
     */
    public function calculate(Collection $klines): Calculation;

    public function isBuyEntry(): bool;

    public function isBuyClose(): bool;

    public function isSellEntry(): bool;

    public function isSellClose(): bool;
}