<?php

namespace Kdabrow\CryptoWorkerContract\Strategy\DataObjects;

use Carbon\CarbonInterval;

class Strategy
{
    public function __construct(
        public readonly string $name,
        public readonly CarbonInterval $interval,
    ) {
        
    }
}