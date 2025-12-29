<?php

declare(strict_types=1);

namespace Marktic\Loyalty\AbstractBase\Models;

use Marktic\Loyalty\AbstractBase\Models\Traits\BaseRepositoryTrait;
use Nip\Records\RecordManager;

class LoyaltyRepository extends RecordManager
{
    use BaseRepositoryTrait;
}