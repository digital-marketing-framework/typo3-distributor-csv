<?php

namespace DigitalMarketingFramework\Typo3\Distributor\Csv\Registry\EventListener;

use DigitalMarketingFramework\Distributor\Csv\DistributorCsvInitialization;
use DigitalMarketingFramework\Typo3\Distributor\Core\Registry\EventListener\AbstractDistributorRegistryUpdateEventListener;

class DistributorRegistryUpdateEventListener extends AbstractDistributorRegistryUpdateEventListener
{
    public function __construct()
    {
        parent::__construct(new DistributorCsvInitialization());
    }
}
