<?php
/**
 * File for class EBizChargeServiceSave
 * @package EBizCharge
 * @subpackage Services
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeServiceSave originally named Save
 * @package EBizCharge
 * @subpackage Services
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeServiceSave extends EBizChargeWsdlClass
{
    /**
     * Method to call the operation originally named saveCard
     * Documentation : Save a credit card for future use
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param EBizChargeStructCreditCardData $_creditCardData
     * @return EBizChargeStructCreditCardToken
     */
    public function saveCard(EBizChargeStructUeSecurityToken $_token,EBizChargeStructCreditCardData $_creditCardData)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->saveCard($_token,$_creditCardData));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named saveCards
     * Documentation : Save a credit cards for future use
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param CreditCardDataArray $_creditCards
     * @return CreditCardTokenArray
     */
    public function saveCards(EBizChargeStructUeSecurityToken $_token,$_creditCards)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->saveCards($_token,$_creditCards));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see EBizChargeWsdlClass::getResult()
     * @return CreditCardTokenArray|EBizChargeStructCreditCardToken
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
