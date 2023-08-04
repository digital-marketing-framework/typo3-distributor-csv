<?php

namespace DigitalMarketingFramework\Typo3\Distributor\Csv\Registry\EventListener;

use DigitalMarketingFramework\Distributor\Csv\DistributorPluginInitialization;
use DigitalMarketingFramework\Typo3\Distributor\Core\Registry\Event\DistributorRegistryPluginUpdateEvent;

class DistributorRegistryPluginUpdateEventListener
{
    public function __invoke(DistributorRegistryPluginUpdateEvent $event): void
    {
        $registry = $event->getRegistry();
        DistributorPluginInitialization::initialize($registry);
    }
}
