<?php
/**
 * File for class EBizChargeServiceCurrency
 * @package EBizCharge
 * @subpackage Services
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeServiceCurrency originally named Currency
 * @package EBizCharge
 * @subpackage Services
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeServiceCurrency extends EBizChargeWsdlClass
{
    /**
     * Method to call the operation originally named currencyConversion
     * Documentation : Lookup currency conversion rate for single dollar amount.
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param string $_fromCurrency
     * @param string $_toCurrency
     * @param double $_amount
     * @return EBizChargeStructCurrencyConversion
     */
    public function currencyConversion(EBizChargeStructUeSecurityToken $_token,$_fromCurrency,$_toCurrency,$_amount)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->currencyConversion($_token,$_fromCurrency,$_toCurrency,$_amount));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see EBizChargeWsdlClass::getResult()
     * @return EBizChargeStructCurrencyConversion
     */
    public function getResult()
    {
        return parent::getResult();
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
