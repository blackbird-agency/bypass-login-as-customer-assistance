<?php
/**
 * IsAssistanceEnabled
 *
 * @copyright Copyright © 2022 Blackbird Agency. All rights reserved.
 * @author    sebastien@bird.eu
 */
declare(strict_types=1);


namespace Blackbird\BypassLoginAsCustomerAssistance\Plugin\Model;


use Magento\LoginAsCustomerAssistance\Model\IsAssistanceEnabled;
use Blackbird\BypassLoginAsCustomerAssistance\Api\ConfigInterface;

class IsAssistanceEnabledPlugin
{
    /**
     * @param ConfigInterface $configResolver
     */
    public function __construct(protected ConfigInterface $configResolver)
    {}

    /**
     * @param IsAssistanceEnabled $subject
     * @param bool $result
     * @return bool
     */
    public function afterExecute(IsAssistanceEnabled $subject, bool $result): bool
    {
        if ($this->configResolver->shouldBypassAssistanceCheck()) {
            return true;
        }
        return $result;
    }
}
