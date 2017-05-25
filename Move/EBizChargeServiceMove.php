<?php
/**
 * File for class EBizChargeServiceMove
 * @package EBizCharge
 * @subpackage Services
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeServiceMove originally named Move
 * @package EBizCharge
 * @subpackage Services
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeServiceMove extends EBizChargeWsdlClass
{
    /**
     * Method to call the operation originally named moveCustomer
     * Documentation : Move customer from one source key to another
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_moveFromToken
     * @param integer $_custNum
     * @param EBizChargeStructUeSecurityToken $_moveToToken
     * @return integer
     */
    public function moveCustomer(EBizChargeStructUeSecurityToken $_moveFromToken,$_custNum,EBizChargeStructUeSecurityToken $_moveToToken)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->moveCustomer($_moveFromToken,$_custNum,$_moveToToken));
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
