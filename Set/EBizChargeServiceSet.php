<?php
/**
 * File for class EBizChargeServiceSet
 * @package EBizCharge
 * @subpackage Services
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeServiceSet originally named Set
 * @package EBizCharge
 * @subpackage Services
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeServiceSet extends EBizChargeWsdlClass
{
    /**
     * Method to call the operation originally named setDefaultPaymentMethod
     * Documentation : Set default payment method
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param integer $_custNum
     * @param integer $_methodID
     * @return boolean
     */
    public function setDefaultPaymentMethod(EBizChargeStructUeSecurityToken $_token,$_custNum,$_methodID)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->setDefaultPaymentMethod($_token,$_custNum,$_methodID));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see EBizChargeWsdlClass::getResult()
     * @return boolean
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
