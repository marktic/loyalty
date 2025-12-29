<?php

declare(strict_types=1);

namespace Marktic\Loyalty\Transactions\Models;

use Marktic\Loyalty\Utility\LoyaltyModels;

/**
 * Trait TransactionRepositoryTrait
 * @package Marktic\Loyalty\Transactions\Models
 */
trait TransactionRepositoryTrait
{
    protected function initRelationsLoyalty(): void
    {
        $this->initRelationsLoyaltyTransactions();
    }

    protected function initRelationsLoyaltyTransactions(): void
    {
        $this->morphMany(
            TransactionRepositoryInterface::RELATION_LOYALTY_TRANSACTIONS,
            [
                'class' => LoyaltyModels::pointTransactionsClass(),
                'morphPrefix' => 'reference',
            ]);
    }
}
