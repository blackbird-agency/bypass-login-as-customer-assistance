<?php
/**
 * Config
 *
 * @copyright Copyright © 2022 Blackbird Agency. All rights reserved.
 * @author    sebastien@bird.eu
 */
declare(strict_types=1);


namespace Blackbird\BypassLoginAsCustomerAssistance\Model;


use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;
use Blackbird\BypassLoginAsCustomerAssistance\Api\ConfigInterface;

class Config implements ConfigInterface
{
    /**
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(protected ScopeConfigInterface $scopeConfig)
    {}

    /**
     * @return bool
     */
    public function shouldBypassAssistanceCheck(): bool
    {
        return (bool)$this->scopeConfig->getValue(
            self::BYPASS_ASSISTANCE_CHECK_PATH,
            ScopeInterface::SCOPE_WEBSITE
        );
    }
}
