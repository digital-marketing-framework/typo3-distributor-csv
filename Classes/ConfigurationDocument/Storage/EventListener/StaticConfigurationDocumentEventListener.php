<?php

namespace DigitalMarketingFramework\Typo3\Distributor\Csv\ConfigurationDocument\Storage\EventListener;

use DigitalMarketingFramework\Typo3\Core\ConfigurationDocument\Storage\EventListener\StaticConfigurationDocumentEventListener as OriginalStaticConfigurationDocumentEventListener;

class StaticConfigurationDocumentEventListener extends OriginalStaticConfigurationDocumentEventListener
{
    protected function getExtensionKey(): string
    {
        return 'digitalmarketingframework-distributor-csv';
    }
}
