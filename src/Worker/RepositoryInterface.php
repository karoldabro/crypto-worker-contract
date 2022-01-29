<?php

namespace Kdabrow\CryptoWorkerContract\Worker;

use Illuminate\Support\Collection;
use Kdabrow\CryptoWorkerContract\Exchange\DataObjects\Kline;
use Carbon\CarbonInterface;

interface RepositoryInterface
{
    /**
     * Check if source has newest klines from exchange
     *
     * @return bool
     */
    public function isSynced(CarbonInterface $since): bool;

    /**
     * Update klines in source
     *
     * @return bool
     */
    public function update(): bool;

    /**
     * Return klines from source
     * 
     * @param CarbonInterface $since
     * @param CarbonInterface $until
     * @return Collection<int, Kline>
     */
    public function get(CarbonInterface $since, CarbonInterface $until): Collection;
}