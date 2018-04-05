## Purpose

PCI compliance has recently become a number one priority in the world of ecommerce. Although Magento 2 is already up and more PCI compliant, still there are many businesses who run Magento 1.x which is known to have certain security breaches and issues. This module helps make Magento 1.x installation more PCI-compliant by controlling user password behavior.

## Description

PCI Authorization module does the following:

- Sets the maximum invalid login attempts after which an account will be blocked for a set period of time
- Sets customer login session expiration after a defined time period
- Enforces customers to create a unique password during the password change process
- Allows to set a minimum customer password length

## Installation

This module is composer ready so you can install it via command (do not forget to add this repo to the composer.json before):

```sh
composer require justcoded/pciauth:*
```

## Usage

### General settings

The module is configured in `System → Configuration → JustCoded → PCI Auth an`d has the following settings:

- Enabled/Disabled
- Minimum password length
- Number of unsuccessful login attempts for customer lock
- Time to reset the failed login attempt counter
- Lockout effective period
- Accounts will be deactivated if not active for more than [minutes]

![alt tag](https://i.imgur.com/8mUVudq.png)

### Customer account settings

PCI authorization settings are also managed per customer and included in Account Information tab under each customer account settings.

![alt tag](https://i.imgur.com/4W2BXQx.png)

## Compatibility

Fully tested with Magento 1.9.3

## Potential Risks

Please note that this module rewrites a customer model:

```
xml
<customer>
    <rewrite>
        <customer>JustCoded_PCIAuth_Model_Customer_Customer</customer>
    </rewrite>
</customer>
```

Thus it can be incompatible with some other modules, and you will need to fix this conflict by yourself (here's how [https://stackoverflow.com/a/14815808](https://stackoverflow.com/a/14815808))

## Contact

Follow our blog at [http://justcoded.com/blog](http://justcoded.com/blog)

### License

The MIT License (MIT)

Copyright © 2017 JustCoded

Permission is hereby granted free of charge to any person obtaining a copy of this software and associated documentation files (the "Software") to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.