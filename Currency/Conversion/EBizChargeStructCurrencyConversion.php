<?php
/**
 * File for class EBizChargeStructCurrencyConversion
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeStructCurrencyConversion originally named CurrencyConversion
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeStructCurrencyConversion extends EBizChargeWsdlClass
{
    /**
     * The Amount
     * @var double
     */
    public $Amount;
    /**
     * The Currency
     * @var string
     */
    public $Currency;
    /**
     * The FromAmount
     * @var double
     */
    public $FromAmount;
    /**
     * The FromCurrency
     * @var string
     */
    public $FromCurrency;
    /**
     * The Rate
     * @var double
     */
    public $Rate;
    /**
     * Constructor method for CurrencyConversion
     * @see parent::__construct()
     * @param double $_amount
     * @param string $_currency
     * @param double $_fromAmount
     * @param string $_fromCurrency
     * @param double $_rate
     * @return EBizChargeStructCurrencyConversion
     */
    public function __construct($_amount = NULL,$_currency = NULL,$_fromAmount = NULL,$_fromCurrency = NULL,$_rate = NULL)
    {
        parent::__construct(array('Amount'=>$_amount,'Currency'=>$_currency,'FromAmount'=>$_fromAmount,'FromCurrency'=>$_fromCurrency,'Rate'=>$_rate),false);
    }
    /**
     * Get Amount value
     * @return double|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param double $_amount the Amount
     * @return double
     */
    public function setAmount($_amount)
    {
        return ($this->Amount = $_amount);
    }
    /**
     * Get Currency value
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->Currency;
    }
    /**
     * Set Currency value
     * @param string $_currency the Currency
     * @return string
     */
    public function setCurrency($_currency)
    {
        return ($this->Currency = $_currency);
    }
    /**
     * Get FromAmount value
     * @return double|null
     */
    public function getFromAmount()
    {
        return $this->FromAmount;
    }
    /**
     * Set FromAmount value
     * @param double $_fromAmount the FromAmount
     * @return double
     */
    public function setFromAmount($_fromAmount)
    {
        return ($this->FromAmount = $_fromAmount);
    }
    /**
     * Get FromCurrency value
     * @return string|null
     */
    public function getFromCurrency()
    {
        return $this->FromCurrency;
    }
    /**
     * Set FromCurrency value
     * @param string $_fromCurrency the FromCurrency
     * @return string
     */
    public function setFromCurrency($_fromCurrency)
    {
        return ($this->FromCurrency = $_fromCurrency);
    }
    /**
     * Get Rate value
     * @return double|null
     */
    public function getRate()
    {
        return $this->Rate;
    }
    /**
     * Set Rate value
     * @param double $_rate the Rate
     * @return double
     */
    public function setRate($_rate)
    {
        return ($this->Rate = $_rate);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EBizChargeWsdlClass::__set_state()
     * @uses EBizChargeWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EBizChargeStructCurrencyConversion
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
