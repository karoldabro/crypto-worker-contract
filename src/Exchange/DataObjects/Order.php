<?php

namespace Kdabrow\CryptoWorkerContract\Exchange\DataObjects;

use DateTimeInterface;

class Order
{
    public function __construct(
        public readonly string $id, 
        public readonly string $pair, 
        public readonly DateTimeInterface $timestamp, 
        public readonly float $price,
    ) {
        
    }
}