<?php

use Marktic\Loyalty\Utility\LoyaltyModels;
use Marktic\Loyalty\Wallets\Models\Wallets;
use Marktic\Loyalty\PointValues\Models\PointValues;
use Marktic\Loyalty\PointTransactions\Models\PointTransactions;
use Marktic\Loyalty\Rewards\Models\Rewards;

return [
    'models' => array(
        LoyaltyModels::WALLETS => Wallets::class,
        LoyaltyModels::POINT_VALUES => PointValues::class,
        LoyaltyModels::POINT_TRANSACTIONS => PointTransactions::class,
        LoyaltyModels::REWARDS => Rewards::class,
    ),
    'tables' => [
        LoyaltyModels::WALLETS => Wallets::TABLE,
        LoyaltyModels::POINT_VALUES => PointValues::TABLE,
        LoyaltyModels::POINT_TRANSACTIONS => PointTransactions::TABLE,
        LoyaltyModels::REWARDS => Rewards::TABLE,
    ],
    'database' => [
        'connection' => 'main',
        'migrations' => true,
    ],
];
