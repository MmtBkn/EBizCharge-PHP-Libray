<?php
/**
 * File for class EBizChargeStructCurrencyObject
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeStructCurrencyObject originally named CurrencyObject
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://secure.ebizcharge.com/soap/gate/246CEB5A/ebizcharge.wsdl}
 * @package EBizCharge
 * @subpackage Structs
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeStructCurrencyObject extends EBizChargeWsdlClass
{
    /**
     * The Currency
     * @var string
     */
    public $Currency;
    /**
     * The DecimalPlaces
     * @var integer
     */
    public $DecimalPlaces;
    /**
     * The NumericCode
     * @var integer
     */
    public $NumericCode;
    /**
     * The Rate
     * @var double
     */
    public $Rate;
    /**
     * The TextCode
     * @var string
     */
    public $TextCode;
    /**
     * Constructor method for CurrencyObject
     * @see parent::__construct()
     * @param string $_currency
     * @param integer $_decimalPlaces
     * @param integer $_numericCode
     * @param double $_rate
     * @param string $_textCode
     * @return EBizChargeStructCurrencyObject
     */
    public function __construct($_currency = NULL,$_decimalPlaces = NULL,$_numericCode = NULL,$_rate = NULL,$_textCode = NULL)
    {
        parent::__construct(array('Currency'=>$_currency,'DecimalPlaces'=>$_decimalPlaces,'NumericCode'=>$_numericCode,'Rate'=>$_rate,'TextCode'=>$_textCode),false);
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
     * Get DecimalPlaces value
     * @return integer|null
     */
    public function getDecimalPlaces()
    {
        return $this->DecimalPlaces;
    }
    /**
     * Set DecimalPlaces value
     * @param integer $_decimalPlaces the DecimalPlaces
     * @return integer
     */
    public function setDecimalPlaces($_decimalPlaces)
    {
        return ($this->DecimalPlaces = $_decimalPlaces);
    }
    /**
     * Get NumericCode value
     * @return integer|null
     */
    public function getNumericCode()
    {
        return $this->NumericCode;
    }
    /**
     * Set NumericCode value
     * @param integer $_numericCode the NumericCode
     * @return integer
     */
    public function setNumericCode($_numericCode)
    {
        return ($this->NumericCode = $_numericCode);
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
     * Get TextCode value
     * @return string|null
     */
    public function getTextCode()
    {
        return $this->TextCode;
    }
    /**
     * Set TextCode value
     * @param string $_textCode the TextCode
     * @return string
     */
    public function setTextCode($_textCode)
    {
        return ($this->TextCode = $_textCode);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see EBizChargeWsdlClass::__set_state()
     * @uses EBizChargeWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return EBizChargeStructCurrencyObject
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
