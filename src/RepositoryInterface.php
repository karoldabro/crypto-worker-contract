<?php

namespace Kdabrow\WorkerContract;

use Carbon\CarbonInterface;
use Illuminate\Support\Collection;
use Kdabrow\ExchangeContract\DataObjects\Kline;

interface RepositoryInterface
{
    /**
     * Check if source has newest klines from exchange
     *
     * @return int How many klines is missing
     */
    public function isSynced(CarbonInterface $since): int;

    /**
     * Update klines in source
     *
     * @param Collection<int, Kline> $klines
     * 
     * @return bool
     */
    public function updateKlines(Collection $klines): bool;

    /**
     * Return klines from source
     * 
     * @param CarbonInterface $since
     * @param CarbonInterface $until
     * @return Collection<int, Kline>
     */
    public function get(CarbonInterface $since, CarbonInterface $until): Collection;

    /**
     * Update calculated indicators
     * 
     * @param array<string, int|float|string> $indicators
     * @return bool
     */
    public function updateIndicators(array $indicators): bool;

    /**
     * Update additional data from calculation
     *
     * @param array $otherData
     * @return bool
     */
    public function updateOtherData(array $otherData): bool;
}