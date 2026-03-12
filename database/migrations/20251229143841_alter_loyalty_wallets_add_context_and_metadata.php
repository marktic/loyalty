<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class AlterLoyaltyWalletsAddContextAndMetadata extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('loyalty_wallets');

        $table
            ->addColumn('context', 'text', ['null' => true, 'after' => 'owner_id'])
            ->addColumn('metadata', 'json', ['null' => true, 'after' => 'points'])
            ->update();
    }
}
