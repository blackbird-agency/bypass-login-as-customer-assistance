Bypass Login As Customer Acceptance

This module is a simple adds the possibility to bypass login as customer acceptance check in case of local work or for 
debug purposes.

## Setup

### Get the package

**Composer Package:**


```
composer require blackbird/bypass-login-as-customer-assistance
```

**Zip Package:**

Unzip the package in app/code/Blackbird/BypassLoginAsCustomerAssistance, from the root of your Magento instance.


### Install the module

Go to your Magento root directory and run the following magento command:

```
php bin/magento setup:upgrade
```

**If you are in production mode, do not forget to recompile and redeploy the static resources, or use the `--keep-generated` option.**
