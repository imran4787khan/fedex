<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The type of Home Delivery Premium service being requested.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_PickupService_HomeDeliveryPremiumType
    extends FedEx_AbstractSimpleType
{
    const _APPOINTMENT = 'APPOINTMENT';
    const _DATE_CERTAIN = 'DATE_CERTAIN';
    const _EVENING = 'EVENING';
}