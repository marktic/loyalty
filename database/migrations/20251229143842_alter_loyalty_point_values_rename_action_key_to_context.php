<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class AlterLoyaltyPointValuesRenameActionKeyToContext extends AbstractMigration
{
    public function up(): void
    {
        $table = $this->table('loyalty_point_values');

        $table
            ->removeIndexByName('unique_point_value_config')
            ->update();

        $table
            ->renameColumn('action_key', 'context')
            ->update();

        $table
            ->addIndex(
                ['tenant', 'tenant_id', 'pointable', 'pointable_id', 'context'],
                ['unique' => true, 'name' => 'unique_point_value_config']
            )
            ->update();
    }

    public function down(): void
    {
        $table = $this->table('loyalty_point_values');

        $table
            ->removeIndexByName('unique_point_value_config')
            ->update();

        $table
            ->renameColumn('context', 'action_key')
            ->update();

        $table
            ->addIndex(
                ['tenant', 'tenant_id', 'pointable', 'pointable_id', 'action_key'],
                ['unique' => true, 'name' => 'unique_point_value_config']
            )
            ->update();
    }
}
