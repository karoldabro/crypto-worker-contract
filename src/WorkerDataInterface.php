<?php

namespace Kdabrow\WorkerContract;

use Carbon\CarbonInterval;
use Kdabrow\ExchangeContract\Enums\Interval;

interface WorkerDataInterface
{
    public function getStrategyId(): string;

    public function getExchangeId(): string;

    public function getSymbol(): string;

    public function getKlineInterval(): Interval|string;

    public function getKlineQuantity(): int;

    public function getRefreshInterval(): CarbonInterval;
}