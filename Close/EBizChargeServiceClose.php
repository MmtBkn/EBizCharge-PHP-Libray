<?php
/**
 * File for class EBizChargeServiceClose
 * @package EBizCharge
 * @subpackage Services
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeServiceClose originally named Close
 * @package EBizCharge
 * @subpackage Services
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeServiceClose extends EBizChargeWsdlClass
{
    /**
     * Method to call the operation originally named closeBatch
     * Documentation : Close the batch specified by BatchRefNum
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param integer $_batchRefNum
     * @return boolean
     */
    public function closeBatch(EBizChargeStructUeSecurityToken $_token,$_batchRefNum)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->closeBatch($_token,$_batchRefNum));
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
