<?php

declare(strict_types=1);

namespace Marktic\Loyalty\PointValues\Models;

use Marktic\Loyalty\AbstractBase\Models\LoyaltyRepository;
use Marktic\Loyalty\Utility\PackageConfig;

/**
 * Class PointValues
 * @package Marktic\Loyalty\PointValues\Models
 */
class PointValues extends LoyaltyRepository
{
    public const TABLE = 'loyalty_point_values';
    public const CONTROLLER = 'loyalty-point-values';

    public function getTable(): string
    {
        return PackageConfig::tableName(static::TABLE, static::TABLE);
    }

    public function getModelNamespace(): string
    {
        return __NAMESPACE__;
    }
}
