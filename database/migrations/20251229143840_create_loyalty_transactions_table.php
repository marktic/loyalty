<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateLoyaltyTransactionsTable extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('loyalty_point_transactions', [
            'id' => false,
            'primary_key' => 'id'
        ]);

        $table->addColumn('id', 'biginteger', ['identity' => true, 'signed' => false])

            // Tenant Context
            ->addColumn('tenant', 'string', ['limit' => 100])
            ->addColumn('tenant_id', 'biginteger', ['signed' => false])

            // Relationships
            ->addColumn('wallet_id', 'biginteger', ['signed' => false])

            // Reference (What caused this? e.g. Order #123)
            ->addColumn('reference', 'string', ['limit' => 100, 'null' => true])
            ->addColumn('reference_id', 'biginteger', ['signed' => false, 'null' => true])

            // Transaction Details
            ->addColumn('points', 'integer', ['signed' => true])
            ->addColumn('description', 'string', ['limit' => 255])

            ->addTimestamps()

            // Indexes
            ->addIndex(['tenant', 'tenant_id'])
            ->addIndex(['wallet_id'])

            // We do NOT make reference unique, as one Order might trigger
            // multiple transactions (e.g. Base Points + Bonus Points)
            ->addIndex(['reference', 'reference_id'])

            // Foreign Key
            ->addForeignKey('wallet_id', 'loyalty_wallets', 'id', [
                'delete' => 'CASCADE',
                'update' => 'NO_ACTION'
            ])

            ->create();
    }
}