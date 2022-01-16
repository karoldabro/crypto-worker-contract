<?php

namespace Kdabrow\CryptoWorkerContract\Worker;

use Carbon\CarbonInterval;
use Kdabrow\CryptoWorkerContract\Strategy\Enums\Interval;

interface ConfigurationInterface
{
    public function getStrategyId(): string;

    public function getExchangeId(): string;

    public function getPair(): string;

    public function getKlineInterval(): Interval|string;

    public function getKlineQuantity(): int;

    public function getRefreshIntrval(): CarbonInterval;
}