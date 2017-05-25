<?php
/**
 * File for class EBizChargeServiceConvert
 * @package EBizCharge
 * @subpackage Services
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeServiceConvert originally named Convert
 * @package EBizCharge
 * @subpackage Services
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeServiceConvert extends EBizChargeWsdlClass
{
    /**
     * Method to call the operation originally named convertTranToCust
     * Documentation : Convert existing transaction into a stored customer.
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param integer $_refNum
     * @param FieldValueArray $_updateData
     * @return integer
     */
    public function convertTranToCust(EBizChargeStructUeSecurityToken $_token,$_refNum,$_updateData)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->convertTranToCust($_token,$_refNum,$_updateData));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named convertTranToPayMethod
     * Documentation : Convert existing transaction into a customer payment method.
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param integer $_refNum
     * @param integer $_custNum
     * @param string $_methodName
     * @param boolean $_makeDefault
     * @return integer
     */
    public function convertTranToPayMethod(EBizChargeStructUeSecurityToken $_token,$_refNum,$_custNum,$_methodName,$_makeDefault)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->convertTranToPayMethod($_token,$_refNum,$_custNum,$_methodName,$_makeDefault));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see EBizChargeWsdlClass::getResult()
     * @return integer
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
