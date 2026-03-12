<?php

declare(strict_types=1);

namespace Marktic\Loyalty\Rewards\Models;

use Marktic\Loyalty\AbstractBase\Models\HasMetadata\RecordHasMetadataTrait;
use Marktic\Loyalty\AbstractBase\Models\LoyaltyRecord;

/**
 * Class Reward
 * @package Marktic\Loyalty\Rewards\Models
 */
class Reward extends LoyaltyRecord
{
    use RecordHasMetadataTrait;
}
