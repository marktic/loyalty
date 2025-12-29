<?php

declare(strict_types=1);

namespace Marktic\Loyalty\Utility;

use ByTIC\PackageBase\Utility\ModelFinder;
use Marktic\Loyalty\LoyaltyServiceProvider;
use Marktic\Loyalty\PointTransactions\Models\PointTransactions;
use Marktic\Loyalty\PointValues\Models\PointValues;
use Marktic\Loyalty\Wallets\Models\Wallets;
use Nip\Records\RecordManager;

/**
 * Class LoyaltyModels
 */
class LoyaltyModels extends ModelFinder
{
    public const WALLETS = 'wallets';
    public const POINT_VALUES = 'point_values';
    public const POINT_TRANSACTIONS = 'point_transactions';

    /**
     * @return Wallets|RecordManager
     */
    public static function wallets(): Wallets|RecordManager
    {
        return static::getModels(self::WALLETS, Wallets::class);
    }
    
    public static function walletsClass(): string
    {
        return static::getModelsClass(self::WALLETS, Wallets::class);
    }
    
    public static function walletsTable(): string
    {
        return static::getTable(self::WALLETS, Wallets::class);
    }

    /**
     * @return PointValues|RecordManager
     */
    public static function pointValues(): PointValues|RecordManager
    {
        return static::getModels(self::POINT_VALUES, PointValues::class);
    }

    public static function pointValuesClass(): string
    {
        return static::getModelsClass(self::POINT_VALUES, PointValues::class);
    }

    public static function pointValuesTable(): string
    {
        return static::getTable(self::POINT_VALUES, PointValues::class);
    }

    /**
     * @return PointTransactions|RecordManager
     */
    public static function pointTransactions(): PointTransactions|RecordManager
    {
        return static::getModels(self::POINT_TRANSACTIONS, PointTransactions::class);
    }

    public static function pointTransactionsClass(): string
    {
        return static::getModelsClass(self::POINT_TRANSACTIONS, PointTransactions::class);
    }

    public static function pointTransactionsTable(): string
    {
        return static::getTable(self::POINT_TRANSACTIONS, PointTransactions::class);
    }

    protected static function packageName(): string
    {
        return LoyaltyServiceProvider::NAME;
    }
}
