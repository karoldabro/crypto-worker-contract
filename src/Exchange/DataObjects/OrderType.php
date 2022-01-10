<?php

namespace Kdabrow\CryptoWorkerContract\Exchange\DataObjects;

use DateTimeInterface;
use Kdabrow\CryptoWorkerContract\Exchange\Enums\OrderSideEnum;
use Kdabrow\CryptoWorkerContract\Exchange\Enums\OrderTypeEnum;

class OrderType
{
    public function __construct(
        public readonly OrderTypeEnum $type,
        public readonly OrderSideEnum $side,
        public readonly string $id,
        public readonly string $pair,
        public readonly float $price,
        public readonly DateTimeInterface $dateTime,
        public readonly ?float $quantity,
        public readonly ?float $stop,
    ) {
        
    }
}