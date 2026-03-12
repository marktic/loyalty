<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class AlterLoyaltyPointTransactionsAddColumns extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('mkt_loyalty_point_transactions');

        $table
            ->addColumn('context', 'text', ['null' => true, 'after' => 'wallet_id'])
            ->addColumn('status', 'enum', [
                'values' => ['pending', 'approved', 'rejected'],
                'default' => 'approved',
                'null' => false,
                'after' => 'description',
            ])
            ->addColumn('metadata', 'json', ['null' => true, 'after' => 'status'])
            ->update();
    }
}
