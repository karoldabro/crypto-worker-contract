<?php

namespace Kdabrow\CryptoWorkerContract\Exchange;

use DateTimeInterface;
use Illuminate\Collections\Collection;
use Kdabrow\CryptoWorkerContract\DataObjects\Exchange\Kline;
use Kdabrow\CryptoWorkerContract\DataObjects\Exchange\Order;
use Kdabrow\CryptoWorkerContract\DataObjects\Exchange\OrderType;

interface ExchangeInterface
{
    /**
     * Connects to exchange
     *
     * @return bool
     */
    public function connect(): bool;

    /**
     * Returns quentity of klines
     *
     * @param string $pair
     * @param string $interval
     * @param integer $quantity
     * @return Collection<Kline>
     */
    public function klines(string $pair, string $interval, int $quantity): Collection;

    /**
     * Creates order in exchange
     *
     * @param OrderType $order
     * @return Order
     */
    public function makeOrder(OrderType $order): Order;

    /**
     * Cancel order
     *
     * @param Order $order
     * @return bool
     */
    public function cancelOrder(Order $order): bool;

    /**
     * Check status of the order on exchange
     *
     * @param Order $order
     * @return Order
     */
    public function checkOrder(Order $order): Order;

    /**
     * Get list of all orders
     *
     * @return Collection
     */
    public function allOrders(string $pair, DateTimeInterface $since, DateTimeInterface $until): Collection;
}