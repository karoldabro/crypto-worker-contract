<?php

namespace Kdabrow\CryptoWorkerContract\Strategy\DataObjects;

class Calculation
{
    public function __construct(
        public readonly array $indicators = [],
        public readonly array $otherData = [],
    ) {
    }
}