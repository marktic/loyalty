<?php

declare(strict_types=1);

namespace Marktic\Loyalty\WalletOwners\Models;

use Marktic\Loyalty\Wallets\Models\Wallet;

/**
 * Trait WalletOwnerRecordTrait
 * @package Marktic\Loyalty\WalletOwners\Models\Traits
 */
trait WalletOwnerRecordTrait
{
    /**
     * @return Wallet|null
     */
    public function getLoyaltyWallet(): ?Wallet
    {
        return $this->getRelation(WalletOwnerRepositoryInterface::RELATION_LOYALTY_WALLET)->getResults();
    }
}
