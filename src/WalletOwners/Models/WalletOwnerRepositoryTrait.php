<?php

declare(strict_types=1);

namespace Marktic\Loyalty\WalletOwners\Models;

use Marktic\Loyalty\Utility\LoyaltyModels;

/**
 * Trait WalletOwnerRepositoryTrait
 * @package Marktic\Loyalty\WalletOwners\Models\Traits
 */
trait WalletOwnerRepositoryTrait
{
    protected function initRelationsLoyalty(): void
    {
        $this->initRelationsLoyaltyWallet();
    }

    protected function initRelationsLoyaltyWallet(): void
    {
        $this->morphOne(
            WalletOwnerRepositoryInterface::RELATION_LOYALTY_WALLET,
            [
                'class' => LoyaltyModels::walletsClass(),
                'morphPrefix' => 'owner',
            ]);
    }
}
