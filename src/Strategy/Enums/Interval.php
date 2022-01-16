<?php

namespace Kdabrow\CryptoWorkerContract\Strategy\Enums;

enum Interval 
{
    case OneMinute = '1m';
    case ThreeMinutes = '3m';
    case FiveMinutes = '5m';
    case FifteenMinutes = '15m';
    case ThirtyMinutes = '30m';
    case OneHour = '1h';
    case OneHours = '2h';
    case FourHours = '4h';
    case OneDay = '1d';
    case ThreeDays = '3d';
    case OneWeek = '1w';
}