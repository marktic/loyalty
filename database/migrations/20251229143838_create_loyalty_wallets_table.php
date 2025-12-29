<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateLoyaltyWalletsTable extends AbstractMigration
{
    public function change(): void
    {
        // We disable the default ID to define an explicit BigInteger ID
        $table = $this->table('loyalty_wallets', [
            'id' => false,
            'primary_key' => 'id'
        ]);

        $table->addColumn('id', 'biginteger', ['identity' => true, 'signed' => false])

            // Tenant Context (Polymorphic)
            ->addColumn('tenant', 'string', ['limit' => 100])
            ->addColumn('tenant_id', 'biginteger', ['signed' => false])

            // Owner Context (Polymorphic: User, Team, etc.)
            ->addColumn('owner', 'string', ['limit' => 100])
            ->addColumn('owner_id', 'biginteger', ['signed' => false])

            // Financials
            ->addColumn('points', 'biginteger', ['default' => 0, 'signed' => true])

            // Timestamps
            ->addTimestamps()

            // Indexes
            ->addIndex(['tenant', 'tenant_id'])
            ->addIndex(['owner', 'owner_id'])

            // Constraint: One wallet per Owner per Tenant
            ->addIndex(
                ['tenant', 'tenant_id', 'owner', 'owner_id'],
                ['unique' => true, 'name' => 'wallet_unique_owner_per_tenant']
            )

            ->create();
    }
}