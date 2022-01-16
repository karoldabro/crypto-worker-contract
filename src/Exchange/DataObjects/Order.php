<?php

namespace Kdabrow\CryptoWorkerContract\Exchange\DataObjects;

use Carbon\CarbonInterface;

class Order
{
    public function __construct(
        public readonly string $id, 
        public readonly string $pair, 
        public readonly CarbonInterface $timestamp, 
        public readonly float $price,
    ) {
        
    }
}