<?php

declare(strict_types=1);

namespace Marktic\Loyalty\Pointables\Models;

use Marktic\Loyalty\PointValues\Models\PointValues;
use Nip\Records\Collections\Collection;

/**
 * Trait PointableRecordTrait
 * @package Marktic\Loyalty\Pointables\Models
 */
trait PointableRecordTrait
{
    /**
     * @return PointValues|Collection
     */
    public function getLoyaltyPointValues(): Collection
    {
        return $this->getRelation(PointableRepositoryInterface::RELATION_LOYALTY_POINT_VALUES)->getResults();
    }
}
