<?php

declare(strict_types=1);

namespace Marktic\Loyalty\PointTransactions\Models;

use Marktic\Loyalty\AbstractBase\Models\LoyaltyRepository;
use Marktic\Loyalty\Utility\PackageConfig;
use Nip\Records\RecordManager;

/**
 * Class PointTransactions
 * @package Marktic\Loyalty\PointTransactions\Models
 */
class PointTransactions extends LoyaltyRepository
{
    public const TABLE = 'mkt_loyalty_point_transactions';
    public const CONTROLLER = 'mkt_loyalty-point-transactions';

    public function getTable(): string
    {
        return PackageConfig::tableName(static::TABLE, static::TABLE);
    }

    public function getModelNamespace(): string
    {
        return __NAMESPACE__;
    }
}
