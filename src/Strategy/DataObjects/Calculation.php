<?php

namespace Kdabrow\CryptoWorkerContract\Strategy\DataObjects;

use Carbon\CarbonInterval;

class Calculation
{
    public function __construct(
        public readonly string $pair,
        public readonly CarbonInterval $interval,
        public readonly array $indicators = [],
        public readonly array $otherData = [],
    ) {
        
    }
}