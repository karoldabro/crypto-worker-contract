<?php

namespace Kdabrow\CryptoWorkerContract\Exchange\DataObjects;

class Kline
{
    public function __construct(
        public readonly string $symbol,
        public readonly int $timestamp,
        public readonly float $open,
        public readonly float $high,
        public readonly float $low,
        public readonly float $close,
        public readonly float $volume,
    ) {
        
    }
}