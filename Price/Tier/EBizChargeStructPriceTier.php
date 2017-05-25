<?php
/**
 * File for class EBizChargeStructPriceTier
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeStructPriceTier originally named PriceTier
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeStructPriceTier extends EBizChargeWsdlClass
{
    /**
     * The Qty
     * @var string
     */
    public $Qty;
    /**
     * The Price
     * @var string
     */
    public $Price;
    /**
     * The CustomerTier
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $CustomerTier;
    /**
     * Constructor method for PriceTier
     * @see parent::__construct()
     * @param string $_qty
     * @param string $_price
     * @param string $_customerTier
     * @return EBizChargeStructPriceTier
     */
    public function __construct($_qty = NULL,$_price = NULL,$_customerTier = NULL)
    {
        parent::__construct(array('Qty'=>$_qty,'Price'=>$_price,'CustomerTier'=>$_customerTier),false);
    }
    /**
     * Get Qty value
     * @return string|null
     */
    public function getQty()
    {
        return $this->Qty;
    }
    /**
     * Set Qty value
     * @param string $_qty the Qty
     * @return string
     */
    public function setQty($_qty)
    {
        return ($this->Qty = $_qty);
    }
    /**
     * Get Price value
     * @return string|null
     */
    public function getPrice()
    {
        return $this->Price;
    }
    /**
     * Set Price value
     * @param string $_price the Price
     * @return string
     */
    public function setPrice($_price)
    {
        return ($this->Price = $_price);
    }
    /**
     * Get CustomerTier value
     * @return string|null
     */
    public function getCustomerTier()
    {
        return $this->CustomerTier;
    }
    /**
     * Set CustomerTier value
     * @param string $_customerTier the CustomerTier
     * @return string
     */
    public function setCustomerTier($_customerTier)
    {
        return ($this->CustomerTier = $_customerTier);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EBizChargeWsdlClass::__set_state()
     * @uses EBizChargeWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EBizChargeStructPriceTier
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
