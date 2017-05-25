<?php
/**
 * File for class EBizChargeServiceCreate
 * @package EBizCharge
 * @subpackage Services
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeServiceCreate originally named Create
 * @package EBizCharge
 * @subpackage Services
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeServiceCreate extends EBizChargeWsdlClass
{
    /**
     * Method to call the operation originally named createBatchUpload
     * Documentation : Post a new batch of transactions to the gateway for processing.
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param string $_fileName
     * @param boolean $_autoStart
     * @param string $_format
     * @param string $_encoding
     * @param stringArray $_fields
     * @param string $_data
     * @param boolean $_overrideDuplicates
     * @return EBizChargeStructBatchUploadStatus
     */
    public function createBatchUpload(EBizChargeStructUeSecurityToken $_token,$_fileName,$_autoStart,$_format,$_encoding,$_fields,$_data,$_overrideDuplicates)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->createBatchUpload($_token,$_fileName,$_autoStart,$_format,$_encoding,$_fields,$_data,$_overrideDuplicates));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see EBizChargeWsdlClass::getResult()
     * @return EBizChargeStructBatchUploadStatus
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
