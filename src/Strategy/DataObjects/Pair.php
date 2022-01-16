<?php

namespace Kdabrow\CryptoWorkerContract\Strategy\DataObjects;

use Kdabrow\CryptoWorkerContract\Strategy\Enums\Interval;

class Pair
{
    public function __construct(
        public readonly string $pair,
        public readonly Interval|string $interval,
    ) {
        
    }
}