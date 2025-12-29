<?php

declare(strict_types=1);

namespace Marktic\Loyalty;

use ByTIC\PackageBase\BaseBootableServiceProvider;
use Marktic\Loyalty\Utility\LoyaltyModels;
use Marktic\Loyalty\Utility\PackageConfig;

/**
 * Class LoyaltyServiceProvider.
 */
class LoyaltyServiceProvider extends BaseBootableServiceProvider
{
    public const NAME = 'mkt_loyalty';

    public function migrations(): ?string
    {
        if (PackageConfig::shouldRunMigrations()) {
            return dirname(__DIR__) . '/database/migrations/';
        }

        return null;
    }

    protected function translationsPath(): string
    {
        return dirname(__DIR__).'/resources/lang/';
    }

    protected function registerCommands()
    {
//        $this->commands(
//        );
    }
    public function boot(): void
    {
        parent::boot();
        LoyaltyModels::wallets();
        LoyaltyModels::pointValues();
        LoyaltyModels::pointTransactions();
    }
}
