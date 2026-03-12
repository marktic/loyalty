<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateLoyaltyRewardsTable extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('mkt_loyalty_rewards', [
            'id' => false,
            'primary_key' => 'id',
        ]);

        $table->addColumn('id', 'biginteger', ['identity' => true, 'signed' => false])

            // Tenant Context (Polymorphic, optional)
            ->addColumn('tenant', 'string', ['limit' => 100, 'null' => true])
            ->addColumn('tenant_id', 'biginteger', ['signed' => false, 'null' => true])

            // Context (e.g. category, campaign slug)
            ->addColumn('context', 'text', ['null' => true])

            // Details
            ->addColumn('name', 'string', ['limit' => 255])
            ->addColumn('description', 'text', ['null' => true])
            ->addColumn('metadata', 'json', ['null' => true])

            ->addTimestamps()

            // Indexes
            ->addIndex(['tenant', 'tenant_id'])

            ->create();
    }
}
