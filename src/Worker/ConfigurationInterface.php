<?php

namespace Kdabrow\CryptoWorkerContract\Worker;

use Kdabrow\CryptoWorkerContract\Exchange\ExchangeInterface;
use Kdabrow\CryptoWorkerContract\Strategy\DataObjects\Pair;
use Kdabrow\CryptoWorkerContract\Strategy\DataObjects\Strategy;

interface ConfigurationInterface
{
    public function pair(): Pair;

    public function strategy(): Strategy;

    public function exchange(): ExchangeInterface;
}