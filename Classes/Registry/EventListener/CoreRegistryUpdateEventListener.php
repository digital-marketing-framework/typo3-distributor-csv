<?php

namespace DigitalMarketingFramework\Typo3\Distributor\Csv\Registry\EventListener;

use DigitalMarketingFramework\Distributor\Csv\DistributorCsvInitialization;
use DigitalMarketingFramework\Typo3\Core\Registry\EventListener\AbstractCoreRegistryUpdateEventListener;

class CoreRegistryUpdateEventListener extends AbstractCoreRegistryUpdateEventListener
{
    public function __construct()
    {
        parent::__construct(new DistributorCsvInitialization('dmf_distributor_csv'));
    }
}
