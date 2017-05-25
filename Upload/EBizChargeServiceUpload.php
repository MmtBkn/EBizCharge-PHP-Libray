<?php
/**
 * File for class EBizChargeServiceUpload
 * @package EBizCharge
 * @subpackage Services
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for EBizChargeServiceUpload originally named Upload
 * @package EBizCharge
 * @subpackage Services
 * @author Muhammet Bakan <mail@muhammetbakan.com>
 * @version 20150429-01
 * @date 2017-05-25
 */
class EBizChargeServiceUpload extends EBizChargeWsdlClass
{
    /**
     * Method to call the operation originally named uploadProductFile
     * Documentation : Upload a file containing products
     * @uses EBizChargeWsdlClass::getSoapClient()
     * @uses EBizChargeWsdlClass::setResult()
     * @uses EBizChargeWsdlClass::saveLastError()
     * @param EBizChargeStructUeSecurityToken $_token
     * @param string $_existingProducts
     * @param string $_defaultCategory
     * @param string $_defaultWarehouse
     * @param string $_columns
     * @param string $_data
     * @return boolean
     */
    public function uploadProductFile(EBizChargeStructUeSecurityToken $_token,$_existingProducts,$_defaultCategory,$_defaultWarehouse,$_columns,$_data)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->uploadProductFile($_token,$_existingProducts,$_defaultCategory,$_defaultWarehouse,$_columns,$_data));
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
