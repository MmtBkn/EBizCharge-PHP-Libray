<?php
/**
 * File for class EBizChargeServiceBulk
 * @package EBizCharge
 * @subpackage Services
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeServiceBulk originally named Bulk
 * @package EBizCharge
 * @subpackage Services
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeServiceBulk extends EBizChargeWsdlClass
{
    /**
     * Method to call the operation originally named bulkCurrencyConversion
     * Documentation : Convert multiple currency amounts in a single method call
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param string $_fromCurrency
     * @param string $_toCurrency
     * @param doubleArray $_amounts
     * @return CurrencyConversionArray
     */
    public function bulkCurrencyConversion(EBizChargeStructUeSecurityToken $_token,$_fromCurrency,$_toCurrency,$_amounts)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->bulkCurrencyConversion($_token,$_fromCurrency,$_toCurrency,$_amounts));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see EBizChargeWsdlClass::getResult()
     * @return CurrencyConversionArray
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
