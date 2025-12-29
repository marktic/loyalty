<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateLoyaltyPointValuesTable extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('loyalty_point_values', [
            'id' => false,
            'primary_key' => 'id'
        ]);

        $table->addColumn('id', 'biginteger', ['identity' => true, 'signed' => false])

            // Tenant Context
            ->addColumn('tenant', 'string', ['limit' => 100])
            ->addColumn('tenant_id', 'biginteger', ['signed' => false])

            // Pointable Entity (Product, Course, etc.)
            ->addColumn('pointable', 'string', ['limit' => 100])
            ->addColumn('pointable_id', 'biginteger', ['signed' => false])

            // Config
            ->addColumn('points', 'integer', ['signed' => true])
            ->addColumn('action_key', 'string', ['limit' => 100, 'default' => 'default'])

            ->addTimestamps()

            // Indexes
            ->addIndex(['tenant', 'tenant_id'])

            // Constraint: A specific pointable entity can only have ONE value
            // for a specific action within a specific tenant.
            ->addIndex(
                ['tenant', 'tenant_id', 'pointable', 'pointable_id', 'action_key'],
                ['unique' => true, 'name' => 'unique_point_value_config']
            )

            ->create();
    }
}