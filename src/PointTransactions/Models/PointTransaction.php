<?php

declare(strict_types=1);

namespace Marktic\Loyalty\PointTransactions\Models;

use Marktic\Loyalty\AbstractBase\Models\HasMetadata\RecordHasMetadataTrait;
use Marktic\Loyalty\AbstractBase\Models\LoyaltyRecord;
use Marktic\Loyalty\PointTransactions\Enums\TransactionStatus;

/**
 * Class PointTransaction
 * @package Marktic\Loyalty\PointTransactions\Models
 *
 * @property TransactionStatus $status
 */
class PointTransaction extends LoyaltyRecord
{
    use RecordHasMetadataTrait;

    protected function initCasts(): void
    {
        parent::initCasts();
        $this->addCast('status', TransactionStatus::class);
    }
}
