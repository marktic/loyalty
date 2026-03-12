<?php

declare(strict_types=1);

namespace Marktic\Loyalty\PointTransactions\Enums;

enum TransactionStatus: string
{
    case Pending = 'pending';
    case Approved = 'approved';
    case Rejected = 'rejected';
}
