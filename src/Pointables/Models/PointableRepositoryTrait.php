<?php

declare(strict_types=1);

namespace Marktic\Loyalty\Pointables\Models;

use Marktic\Loyalty\Utility\LoyaltyModels;

/**
 * Trait PointableRepositoryTrait
 * @package Marktic\Loyalty\Pointables\Models
 */
trait PointableRepositoryTrait
{
    protected function initRelationsLoyalty(): void
    {
        $this->initRelationsLoyaltyPointValues();
    }

    protected function initRelationsLoyaltyPointValues(): void
    {
        $this->morphMany(
            PointableRepositoryInterface::RELATION_LOYALTY_POINT_VALUES,
            [
                'class' => LoyaltyModels::pointValuesClass(),
                'morphPrefix' => 'pointable',
            ]);
    }
}
