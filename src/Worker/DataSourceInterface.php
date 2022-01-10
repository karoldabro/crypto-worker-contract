<?php

namespace Kdabrow\CryptoWorkerContract\Worker;

use Illuminate\Collections\Collection;
use Kdabrow\CryptoWorkerContract\DataObjects\Kline;

interface DataSourceInterface
{
    /**
     * Check if source has newest klines from exchange
     *
     * @return bool
     */
    public function isSynced(): bool;

    /**
     * Update klines in source
     *
     * @return bool
     */
    public function update(): bool;

    /**
     * Return klines from source
     * 
     * @return Collection<Kline>
     */
    public function get(): Collection;
}