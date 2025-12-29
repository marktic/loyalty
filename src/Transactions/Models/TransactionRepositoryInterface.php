<?php

declare(strict_types=1);

namespace Marktic\Loyalty\Transactions\Models;

/**
 * Interface TransactionRepositoryInterface
 * @package Marktic\Loyalty\Transactions\Models
 */
interface TransactionRepositoryInterface
{
    public const RELATION_LOYALTY_TRANSACTIONS = 'LoyaltyTransactions';
}
