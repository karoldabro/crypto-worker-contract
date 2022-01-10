<?php

namespace Kdabrow\CryptoWorkerContract\Strategy\DataObjects;

class Pair
{
    public function __construct(
        public readonly string $pair,
        public readonly string $interval,
    ) {
        
    }
}