<?php
/**
 * File for class EBizChargeServiceQuick
 * @package EBizCharge
 * @subpackage Services
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeServiceQuick originally named Quick
 * @package EBizCharge
 * @subpackage Services
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeServiceQuick extends EBizChargeWsdlClass
{
    /**
     * Method to call the operation originally named quickUpdateCustomer
     * Documentation : Update specified data for customer specified by CustNum
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param integer $_custNum
     * @param FieldValueArray $_updateData
     * @return boolean
     */
    public function quickUpdateCustomer(EBizChargeStructUeSecurityToken $_token,$_custNum,$_updateData)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->quickUpdateCustomer($_token,$_custNum,$_updateData));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named quickUpdateProduct
     * Documentation : Update specified data for product specified by ProductRefNum
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param string $_productRefNum
     * @param FieldValueArray $_updateData
     * @return boolean
     */
    public function quickUpdateProduct(EBizChargeStructUeSecurityToken $_token,$_productRefNum,$_updateData)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->quickUpdateProduct($_token,$_productRefNum,$_updateData));
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
