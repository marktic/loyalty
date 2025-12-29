<?php

declare(strict_types=1);

namespace Marktic\Loyalty\Wallets\Models;

use Marktic\Loyalty\AbstractBase\Models\LoyaltyRepository;
use Marktic\Loyalty\Utility\PackageConfig;

/**
 * Class Wallets
 * @package Marktic\Loyalty\Wallets\Models
 */
class Wallets extends LoyaltyRepository
{
    public const TABLE = 'loyalty_wallets';
    public const CONTROLLER = 'loyalty-wallets';

    public function getTable(): string
    {
        return PackageConfig::tableName(static::TABLE, static::TABLE);
    }

    public function getModelNamespace(): string
    {
        return __NAMESPACE__;
    }
}
