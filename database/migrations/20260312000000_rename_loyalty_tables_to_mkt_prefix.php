<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

/**
 * Renames the legacy un-prefixed loyalty tables to their new mkt_-prefixed
 * names. This migration is a no-op on fresh installations, which already
 * create the tables with the mkt_ prefix.
 */
final class RenameLoyaltyTablesToMktPrefix extends AbstractMigration
{
    public function up(): void
    {
        // Rename the referenced table first so the FK constraint on
        // loyalty_point_transactions remains consistent throughout.
        if ($this->hasTable('loyalty_wallets')) {
            $this->table('loyalty_wallets')->rename('mkt_loyalty_wallets')->update();
        }

        if ($this->hasTable('loyalty_point_values')) {
            $this->table('loyalty_point_values')->rename('mkt_loyalty_point_values')->update();
        }

        if ($this->hasTable('loyalty_point_transactions')) {
            $this->table('loyalty_point_transactions')->rename('mkt_loyalty_point_transactions')->update();
        }

        if ($this->hasTable('loyalty_rewards')) {
            $this->table('loyalty_rewards')->rename('mkt_loyalty_rewards')->update();
        }
    }

    public function down(): void
    {
        if ($this->hasTable('mkt_loyalty_rewards')) {
            $this->table('mkt_loyalty_rewards')->rename('loyalty_rewards')->update();
        }

        if ($this->hasTable('mkt_loyalty_point_transactions')) {
            $this->table('mkt_loyalty_point_transactions')->rename('loyalty_point_transactions')->update();
        }

        if ($this->hasTable('mkt_loyalty_point_values')) {
            $this->table('mkt_loyalty_point_values')->rename('loyalty_point_values')->update();
        }

        // Rename wallets last in down() so the FK in loyalty_point_transactions
        // still points to the correct table while we rename it.
        if ($this->hasTable('mkt_loyalty_wallets')) {
            $this->table('mkt_loyalty_wallets')->rename('loyalty_wallets')->update();
        }
    }
}
