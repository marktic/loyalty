<?php

declare(strict_types=1);

namespace Marktic\Loyalty\Rewards\Models;

use Marktic\Loyalty\AbstractBase\Models\LoyaltyRepository;
use Marktic\Loyalty\Utility\PackageConfig;

/**
 * Class Rewards
 * @package Marktic\Loyalty\Rewards\Models
 */
class Rewards extends LoyaltyRepository
{
    public const TABLE = 'mkt_loyalty_rewards';
    public const CONTROLLER = 'mkt_loyalty-rewards';

    public function getTable(): string
    {
        return PackageConfig::tableName(static::TABLE, static::TABLE);
    }

    public function getModelNamespace(): string
    {
        return __NAMESPACE__;
    }
}
