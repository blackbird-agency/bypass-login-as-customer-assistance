<?php

namespace Blackbird\BypassLoginAsCustomerAssistance\Api;

interface ConfigInterface
{
    public const BYPASS_ASSISTANCE_CHECK_PATH = 'login_as_customer/general/bypass_acceptance_check';

    /**
     * @return bool
     */
    public function shouldBypassAssistanceCheck(): bool;
}
