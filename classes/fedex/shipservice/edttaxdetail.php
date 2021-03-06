<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_EdtTaxDetail
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param EdtTaxType $TaxType
     * return FedEx_ShipService_EdtTaxDetail
     */
    public function setTaxType(FedEx_ShipService_EdtTaxType $taxType)
    {
        $this->TaxType = $taxType;
        return $this;
    }
    
    /**
     * 
     *
     * @param date $EffectiveDate
     * return FedEx_ShipService_EdtTaxDetail
     */
    public function setEffectiveDate($effectiveDate)
    {
        $this->EffectiveDate = $effectiveDate;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $Name
     * return FedEx_ShipService_EdtTaxDetail
     */
    public function setName($name)
    {
        $this->Name = $name;
        return $this;
    }
    
    /**
     * 
     *
     * @param Money $TaxableValue
     * return FedEx_ShipService_EdtTaxDetail
     */
    public function setTaxableValue(FedEx_ShipService_Money $taxableValue)
    {
        $this->TaxableValue = $taxableValue;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $Description
     * return FedEx_ShipService_EdtTaxDetail
     */
    public function setDescription($description)
    {
        $this->Description = $description;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $Formula
     * return FedEx_ShipService_EdtTaxDetail
     */
    public function setFormula($formula)
    {
        $this->Formula = $formula;
        return $this;
    }
    
    /**
     * 
     *
     * @param Money $Amount
     * return FedEx_ShipService_EdtTaxDetail
     */
    public function setAmount(FedEx_ShipService_Money $amount)
    {
        $this->Amount = $amount;
        return $this;
    }
    

    
}