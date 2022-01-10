<?php

namespace Kdabrow\CryptoWorkerContract\Strategy\DataObjects;

class Calculation
{
    public function __construct(
        public readonly string $pair,
        public readonly string $interval,
        public readonly array $indicators = [],
        public readonly array $otherData = [],
    ) {
        
    }
}