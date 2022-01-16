<?php

namespace Kdabrow\CryptoWorkerContract\Strategy\DataObjects;

use Carbon\CarbonInterval;

class Pair
{
    public function __construct(
        public readonly string $pair,
        public readonly CarbonInterval $interval,
    ) {
        
    }
}