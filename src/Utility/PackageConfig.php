<?php

declare(strict_types=1);

namespace Marktic\Loyalty\Utility;

use Marktic\Loyalty\LoyaltyServiceProvider;
use Nip\Utility\Traits\SingletonTrait;

/**
 * Class PackageConfig.
 */
class PackageConfig extends \ByTIC\PackageBase\Utility\PackageConfig
{
    use SingletonTrait;

    protected $name = LoyaltyServiceProvider::NAME;

    public static function configPath(): string
    {
        return __DIR__ . '/../../config/mkt_loyalty.php';
    }

    public static function tableName($name, $default = null)
    {
        return static::instance()->get('tables.' . $name, $default);
    }

    /**
     * @throws \Exception
     */
    public static function databaseConnection(): ?string
    {
        return (string) static::instance()->get('database.connection');
    }

    public static function shouldRunMigrations(): bool
    {
        return false !== static::instance()->get('database.migrations', false);
    }

    public static function blocksDiscovery()
    {
        return static::instance()->get('blocks.discovery', []);
    }
}
