<?php

namespace Kdabrow\CryptoWorkerContract\Exchange\DataObjects;

use Carbon\CarbonInterface;
use Kdabrow\CryptoWorkerContract\Exchange\Enums\OrderSide;
use Kdabrow\CryptoWorkerContract\Exchange\Enums\OrderType;

class OrderType
{
    public function __construct(
        public readonly OrderType $type,
        public readonly OrderSide $side,
        public readonly string $id,
        public readonly string $pair,
        public readonly float $price,
        public readonly CarbonInterface $dateTime,
        public readonly ?float $quantity,
        public readonly ?float $stop,
    ) {
        
    }
}