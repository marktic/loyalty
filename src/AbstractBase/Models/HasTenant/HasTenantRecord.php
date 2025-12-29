<?php

namespace Marktic\Loyalty\AbstractBase\Models\HasTenant;

use Nip\Records\Record;

/**
 * Trait HasTenantRecord
 * @package Marktic\Loyalty\AbstractBase\Models\HasTenant
 *
 * @method Record getTenant
 */
trait HasTenantRecord
{
    public string|int $tenant_id;
    public string $tenant;

    /**
     * @param Record $record
     */
    public function populateFromTenant($record)
    {
        $this->tenant_id = $record->id;
        $this->tenant = $record->getManager()->getMorphName();
    }
}
