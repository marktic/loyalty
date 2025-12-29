<?php

declare(strict_types=1);

namespace Marktic\Loyalty\Transactions\Models;

use Marktic\Loyalty\PointTransactions\Models\PointTransactions;
use Nip\Records\Collections\Collection;

/**
 * Trait TransactionRecordTrait
 * @package Marktic\Loyalty\Transactions\Models
 */
trait TransactionRecordTrait
{
    /**
     * @return PointTransactions|Collection
     */
    public function getLoyaltyTransactions(): Collection
    {
        return $this->getRelation(TransactionRepositoryInterface::RELATION_LOYALTY_TRANSACTIONS)->getResults();
    }
}
