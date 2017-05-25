<?php
/**
 * File for class EBizChargeServiceCopy
 * @package EBizCharge
 * @subpackage Services
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeServiceCopy originally named Copy
 * @package EBizCharge
 * @subpackage Services
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeServiceCopy extends EBizChargeWsdlClass
{
    /**
     * Method to call the operation originally named copyCustomer
     * Documentation : Copy customer from one source key to another
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_copyFromToken
     * @param integer $_custNum
     * @param EBizChargeStructUeSecurityToken $_copyToToken
     * @return integer
     */
    public function copyCustomer(EBizChargeStructUeSecurityToken $_copyFromToken,$_custNum,EBizChargeStructUeSecurityToken $_copyToToken)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->copyCustomer($_copyFromToken,$_custNum,$_copyToToken));
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
