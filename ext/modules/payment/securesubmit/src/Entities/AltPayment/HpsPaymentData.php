<?php
/**
 * Order Data
 *
 * PHP Version 5.2+
 *
 * @category PHP
 * @package  GP
 * @author   Global Payments <developersupport@globalpay.com>
 * @license  https://github.com/globalpayments/php-sdk/blob/master/LICENSE.md
 * @link     https://github.com/globalpayments/php-sdk
 */

/**
 * Order Data
 *
 * @category PHP
 * @package  GP
 * @author   Global Payments <developersupport@globalpay.com>
 * @license  https://github.com/globalpayments/php-sdk/blob/master/LICENSE.md
 * @link     https://github.com/globalpayments/php-sdk
 */
class HpsPaymentData
{
    /** @var double|null */
    public $subtotal       = null;

    /** @var double|null */
    public $shippingAmount = null;

    /** @var double|null */
    public $taxAmount      = null;

    /** @var string|null */
    public $paymentType    = null;

    /** @var string|null */
    public $invoiceNumber  = null;
}
