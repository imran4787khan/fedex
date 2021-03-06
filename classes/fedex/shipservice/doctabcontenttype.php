<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_ShipService_DocTabContentType
    extends FedEx_AbstractSimpleType
{
    const _BARCODED = 'BARCODED';
    const _MINIMUM = 'MINIMUM';
    const _STANDARD = 'STANDARD';
    const _ZONE001 = 'ZONE001';
}