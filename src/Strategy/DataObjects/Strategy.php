<?php

namespace Kdabrow\CryptoWorkerContract\Strategy\DataObjects;

class Strategy
{
    public function __construct(
        public readonly string $name,
        public readonly string $interval,
    ) {
        
    }
}